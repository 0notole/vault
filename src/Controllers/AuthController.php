<?php

namespace 0notole\Vault\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller {

    /**
     * CONSTRUCTOR
     */
    public function __construct () {
        $this->middleware('login', ['except' => ['logout']]);
    }

    /**
     * AUTH ATTEMPT
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function auth (Request $request) {

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {

            // Authentication passed
            return redirect()->route('admin.home');

        }

        // Redirect back otherwise
        return redirect()->route('admin.login');

    }

    /**
     * LOGIN PAGE
     * @return [type] [description]
     */
    public function login () {

        // Simply return a iew
        return view('vault::login');

    }

    /**
     * LOGOUT
     * @return [type] [description]
     */
    public function logout () {

        // Logout action
        Auth::guard('admin')->logout();

        // Redirect back
        return redirect()->route('admin.login');

    }

}
