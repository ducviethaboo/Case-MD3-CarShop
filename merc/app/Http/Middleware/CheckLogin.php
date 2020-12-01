<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
//        $email = $request->email;
//        $password = $request->password;
//        if($email === 'admin' && $password === 'admin') {
//            $request->session()->push('login', true);
//            return $next($request);
//        }
//        $request->session()->flash('loggin-error', 'Bạn không phải là admin');
//        $abc = $request->session()->get('login-error');
//        dd(abc);
//        return redirect()->route('home');
    }
}
