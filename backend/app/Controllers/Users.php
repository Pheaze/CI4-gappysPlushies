<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    /**
     * Users controller
     *
     * This controller serves user-facing pages (landing, login,
     * sign-up, mood board, road map) and provides a logout helper.
     * The methods here are thin: they mostly return views. The
     * comments below explain what each method returns and any
     * important side effects (for example, `logout()` clears the
     * session and cookie).
     */
    public function index(): string
    {
    // Return the main landing page for the user-facing site.
    // In CodeIgniter the view() helper loads the view file and
    // returns the rendered HTML as a string which the framework
    // will send to the browser.
        return view('user/landingpage');
    }

    public function login(): string
    {
    // Show the login form view. This method does not perform any
    // authentication itself — the Auth controller handles the
    // POST processing for login.
        return view('user/login');
    }

    public function signUp(): string
    {
    // Show the sign-up / registration view. Submission handling
    // is implemented in Auth::signUp() (this method only
    // returns the HTML form).
        return view('user/signUp');
    }

    public function moodBoard(): string
    {
    // Show a mood-board view where users can browse or pick
    // design inspiration. Keep UI logic in the view file.
        return view('user/mood');
    }

    public function roadMap(): string
    {
        // Show the project's road map or feature timeline.
        return view('user/road');
    }

    public function logout()
    {
    // Destroy the user's session to log them out. This removes
    // all server-side session data.
    session()->destroy();

    // Remove the session cookie in the browser by setting its
    // expiry to a time in the past. We try to reuse the session
    // cookie parameters so the cookie removal matches how it was
    // originally created (path, domain, secure flag).
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 3600,
            $params['path'] ?? '/',
            $params['domain'] ?? '',
            isset($_SERVER['HTTPS']),
            true
        );

    // Redirect to the public home page after logout.
    return redirect()->to('/');
    }
}