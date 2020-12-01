<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
            return view('user.login');
    }

    public function checkLogin(Request $request)
    {
        $accAdmin = User::firstWhere('role', 'Admin');
        $accUser = User::firstWhere('role', 'User');
        $products = Product::all();
        $email = $request->email;
        $password = $request->password;
        $correctPassAdmin = Hash::check($password,$accAdmin->password );
        $correctPassUser = Hash::check($password,$accUser->password );
        if($accAdmin->email === $email && $correctPassAdmin) {
            $request->session()->push('login', true);
            return view('admin.admin', compact('products'));
        } elseif ($accUser->email === $email && $correctPassUser) {
            $request->session()->push('login', true);
            return redirect()->route('home');
        }
         $request->session()->flash('login-fail', 'Tài khoản không hợp lệ');
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('home');
    }
}
