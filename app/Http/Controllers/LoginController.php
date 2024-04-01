<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công
            return redirect()->route('index');
        } else {
            // Đăng nhập thất bại
            return back()->withErrors(['email' => 'Email hoặc mật khẩu không đúng']);
        }
    }
    
}
