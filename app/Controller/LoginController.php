<?php

namespace App\Controller;

use App\Model\User;
use GoSafer\Controller\BaseController;
use GoSafer\Http\Request;

class LoginController extends BaseController
{
    public function index(Request $request)
    {
        if(auth()->loggined()) 
            return redirect('/');
        return view('auth/login');
    }

    public function login(Request $request)
    {
        if(auth()->loggined()) 
            return redirect('/');
        $status = auth()->login($request->email, $request->password);
        return $status ? redirect('/') : redirect('/login')->with(['error' => 'Sai tài khoản hoặc mật khẩu']);
    }

    public function logout(Request $request)
    {
        auth()->logout();
        return redirect('/');
    }
}