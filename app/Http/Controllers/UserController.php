<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;    


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function check_login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            // return redirect()->intended('dashboard'); // Chuyển hướng sau khi đăng nhập thành công
            return view('admin.index');
        }
    }
}
