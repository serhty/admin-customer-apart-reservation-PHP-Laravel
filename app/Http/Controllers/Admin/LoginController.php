<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\LoginModel;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function login_check(Request $request)
    {
        if(Auth::attempt(['username'=>$request->username,'password'=>$request->password])){
            return redirect()->route('admin.home');
        }else{
            return view('login-failed-admin');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }


}
