<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{

    public function login() {

        $session = session();
        $request = service('request');


        $validation = \Config\Services::validation();
        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required');


        $post = $request->getPost();

        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }


        $email = $request->getPost('email');
        $userModel = new \App\Models\UserModel();
        $user = $userModel->where('email', $email)->first();


        if (! $user) {
            $session->setFlashdata('errors', ['email' => 'No account found for that email']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        $userArr = is_array($user)
            ? $user
            : (method_exists($user, 'toArray') ? $user->toArray() : (array) $user);


        if (! password_verify($request->getPost('password'), $userArr['password_hash'] ?? '')) {
            $session->setFlashdata('errors', ['password' => 'Incorrect password']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }


        $session->set('user', [
            'id' => $userArr['id'] ?? null,
            'email' => $userArr['email'] ?? null,
            'first_name' => $userArr['first_name'] ?? null,
            'last_name' => $userArr['last_name'] ?? null,
            'type' => $userArr['type'] ?? 'client',
            'display_name' => trim(
                ($userArr['first_name'][0] ?? '') . ' ' . ($userArr['middle_name'][0] ?? '') . ' ' . ($userArr['last_name'] ?? '')
            ),
        ]);

        $type = strtolower($userArr['type'] ?? 'client');
        if ($type === 'admin') {
            return redirect()->to('/dash');
        }

        if ($type === 'client') {
            return redirect()->to('/');
        }
    }

    public function signUp(){
        $session = session();
        $request = service('request');
        $post = $request->getPost();


        $email = $request->getPost('email');
        $userModel = new \App\Models\UserModel();
        $user = $userModel->where('email', $email)->first();

        $validation = \Config\Services::validation();
        $validation->setRule('first_name', 'First_Name', 'required|min_length[2]');
        $validation->setRule('last_name', 'Last_Name',  'required|min_length[2]');
        $validation->setRule('username', 'Username',  'required|is_unique[user.username]');
        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required');
        $validation->setRule('password', 'Password', 'required|matches[password]');

        if ($user) {
            $session->setFlashdata('errors', ['email' => 'No account found for that email']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }


        $userModel = new \App\Models\UserModel();

        $data = [
            'first_name' => $post['first_name'],
            'last_name' => $post['last_name'],
            'email' => $post['email'],
            'password_hash' => password_hash($post['password'], PASSWORD_DEFAULT),
            'type' => 'client',
            'account_status' => 1,
            'email_activated' => 0,
        ];

        $inserted = $userModel->insert($data);
        return redirect()->to('/login');
    }

public function logout()
   {
    $errors = $errors ?? [];
    $old = $old ?? [];
   session()->destroy();
   $params = session_get_cookie_params();
   setcookie(session_name(), '', time() - 3600, $params['path'] ?? '/', $params['domain'] ?? '', isset($_SERVER['HTTPS']), true);
   return redirect()->to('/');
   }
}