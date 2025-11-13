<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    /**
     * Auth controller
     *
     * This controller handles user authentication flows such as login
     * and sign-up. The comments inside each method explain the purpose
     * of each step, the data being used, and common failure modes so a
     * junior developer can follow the control flow and reason about
     * behaviour.
     *
     * Notes for a junior developer:
     * - This controller relies on CodeIgniter services such as the
     *   request service and the validation service.
     * - Session flashdata is used to show short-lived messages back in
     *   the view (errors, old input values).
     * - The methods in this file intentionally only show flow — there
     *   are some small logic issues (marked below) that should be
     *   reviewed before production use.
     */
    public function login() {
        // Start by getting helpers for session and request data.
        // session() is a CodeIgniter helper that returns the session
        // manager. service('request') gives the current HTTP request.
        $session = session();
        $request = service('request');

        // Configure simple validation rules. These are applied to the
        // POST data we expect from the login form.
        $validation = \Config\Services::validation();
        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required');

        // Grab the entire POST payload to validate it.
        $post = $request->getPost();

        // If validation fails: store errors and old input in flashdata
        // so the view can re-populate fields and show messages.
        if (! $validation->run($post)) {
            // getErrors() returns an array of validation messages.
            $session->setFlashdata('errors', $validation->getErrors());
            // Save the original POST so the form can be re-filled.
            $session->setFlashdata('old', $post);
            // Redirect back to the form. withInput() also preserves old
            // input through the framework helpers.
            return redirect()->back()->withInput();
        }

        // Validation passed. Pull the submitted email and look up the
        // user in the database using the UserModel.
        $email = $request->getPost('email');
        $userModel = new \App\Models\UserModel();
        $user = $userModel->where('email', $email)->first();

        // If no user record exists, add a helpful error message and
        // send the visitor back to the login form.
        if (! $user) {
            $session->setFlashdata('errors', ['email' => 'No account found for that email']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        // The model may return an array or an object. Normalize it to
        // an array to access fields consistently.
        $userArr = is_array($user)
            ? $user
            : (method_exists($user, 'toArray') ? $user->toArray() : (array) $user);

        // Verify the supplied password against the stored password
        // hash. password_verify returns true when the password matches.
        // We use the null coalescing operator to avoid notices if the
        // array key is missing.
        if (! password_verify($request->getPost('password'), $userArr['password_hash'] ?? '')) {
            $session->setFlashdata('errors', ['password' => 'Incorrect password']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        // Password is correct. Store a small user payload in session so
        // other controllers/views can detect the logged-in user.
        // Keep the session payload minimal to reduce cookie/session size.
        $session->set('user', [
            'id' => $userArr['id'] ?? null,
            'email' => $userArr['email'] ?? null,
            'first_name' => $userArr['first_name'] ?? null,
            'last_name' => $userArr['last_name'] ?? null,
            'type' => $userArr['type'] ?? 'client',
            // Build a small display name. The code defensively handles
            // missing name parts with the null coalescing operator.
            'display_name' => trim(
                ($userArr['first_name'][0] ?? '') . ' ' . ($userArr['middle_name'][0] ?? '') . ' ' . ($userArr['last_name'] ?? '')
            ),
        ]);

        // Redirect user depending on their role. We lower-case the
        // stored type to make comparisons case-insensitive.
        $type = strtolower($userArr['type'] ?? 'client');
        if ($type === 'admin') {
            // Admin/manager users go to the admin dashboard.
            return redirect()->to('/dash');
        }

        if ($type === 'client') {
            // Regular clients go to the public home page.
            return redirect()->to('/');
        }
    }

    public function signUp(){
        // Sign-up flow explanation:
        // 1) Get session and request helpers.
        // 2) Read POST data and validate required fields.
        // 3) Ensure unique username/email, hash password and insert.
        // Note: The existing code contains logic that may be incorrect
        // (see the "Potential issues" comments below) — the code is
        // left untouched but the comments point out what to review.
        $session = session();
        $request = service('request');
        $post = $request->getPost();

        // Caller submitted email — used here to check for an existing
        // user record.
        $email = $request->getPost('email');
        $userModel = new \App\Models\UserModel();
        $user = $userModel->where('email', $email)->first();

        // Set up validation rules for the sign-up form. These check
        // first/last name length, username uniqueness (example), and
        // that email and password are present.
        $validation = \Config\Services::validation();
        $validation->setRule('first_name', 'First_Name', 'required|min_length[2]');
        $validation->setRule('last_name', 'Last_Name',  'required|min_length[2]');
        $validation->setRule('username', 'Username',  'required|is_unique[user.username]');
        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required');
        // NOTE: The following line repeats the 'password' rule and
        // attempts to validate it against itself. Typically you want
        // 'matches[password_confirm]' or similar to compare the
        // confirmation field. This is likely a bug and should be
        // corrected in a future revision.
        $validation->setRule('password', 'Password', 'required|matches[password]');

        // POTENTIAL ISSUE: The code below treats a missing user as an
        // error. In a sign-up flow we usually expect "no existing user"
        // to be a good condition (so we can create a new one). This
        // logic appears reversed and should be reviewed.
        if ($user) {
            $session->setFlashdata('errors', ['email' => 'No account found for that email']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        // Normalize user record to array if needed (same as login).

        // NOTE: The code below constructs a new UsersModel (plural)
        // after having used UserModel (singular). Verify which model
        // exists in the project (UserModel or UsersModel) and unify
        // usage. Leaving it as-is here but this is another spot to
        // revisit during refactor.
        $userModel = new \App\Models\UserModel();

        // Prepare the data payload for insertion. We hash the
        // password before storing it to ensure raw passwords are not
        // kept in the database.
        $data = [
            'first_name' => $post['first_name'],
            'last_name' => $post['last_name'],
            'email' => $post['email'],
            'password_hash' => password_hash($post['password'], PASSWORD_DEFAULT),
            'type' => 'client',
            'account_status' => 1,
            'email_activated' => 0,
        ];

        // Insert the new user. The insert() method typically returns
        // the new record ID on success or false on failure. A real
        // implementation should check the return value and handle
        // errors (e.g., show messages, rollback, logging).
        $inserted = $userModel->insert($data);
        return redirect()->to('/login');
    }

public function logout()
   {
   session()->destroy();
   $params = session_get_cookie_params();
   setcookie(session_name(), '', time() - 3600, $params['path'] ?? '/', $params['domain'] ?? '', isset($_SERVER['HTTPS']), true);
   return redirect()->to('/');
   }
}