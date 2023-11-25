<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login_submit(Request $request)
    {
        // Validate the user's input (username and password)
        $credentials = $request->only('username', 'password');

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Authentication was successful

            // You can add any additional logic here, e.g., setting user roles or recording login activity.

            return redirect()->route('dashboard');
        } else {
            // Authentication failed
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }
}
