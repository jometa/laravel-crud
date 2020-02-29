<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function show() {
    	return view('auth.login');
    }

    public function process(Request $request) {
    	$credentials = $request->only('email', 'password');
    	if (Auth::attempt($credentials)) {
    		return redirect()->intended('/home/foo');
    	}
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
