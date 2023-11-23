<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            //Đăng nhập thành công
            return redirect()->intended('/admin/dashboard');
        }
        //Đăng nhập thất bại
        return redirect()->back()->withInput()->withErrors(['login_error' => 'Invalid credentials']);
    }

    public function showRegistrationForm()
    {
        return view('admin.login.login');
    }

    public function register(Request $request)
    {
        $user = new User();
        $user->username = $request->input('username');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        //Đăng nhập người dùng sau khi đăng ký
        Auth::login($user);

        //Chuyển hướng sau khi đăng ký thành công
        return redirect('admin/dashboard')->with('success', 'Đăng ký thành công!');
    }
}
