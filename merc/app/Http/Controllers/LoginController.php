<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
            return view('user.login');
    }

    public function checkLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if($email === 'admin' && $password === 'admin') {
            return view('admin.admin');
        }
        return redirect()->route('home');
    }
}
