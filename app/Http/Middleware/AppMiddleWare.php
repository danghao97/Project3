<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class AppMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $num_users = count(\App\User::all());
        if ($num_users == 0) {
            return redirect()->route('Config');
        } elseif (Auth::check()) {
            $User = Auth::user();
            if ($User->chuc_vu == 0) {
                return redirect()->route('QuanLy');
            } elseif ($User->chuc_vu == 1) {
                return redirect()->route('VanHanh');
            } else {
                return redirect()->route('GiamSat');
            }
        } else {
            $errors = new MessageBag(['title' => 'Bạn chưa đăng nhập vào hệ thống']);
            return redirect()->route('Login')->withErrors($errors);
        }
    }
}
