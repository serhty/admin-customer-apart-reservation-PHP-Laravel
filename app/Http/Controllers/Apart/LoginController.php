<?php

namespace App\Http\Controllers\Apart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Panel\LoginModel;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login()
    {
        return view('apart.login');
    }

    public function login_check(Request $request)
    {
        if (Auth::guard('apart')->attempt(['username' => $request->username, 'password' => $request->password, 'status' => '1']))
        {
            return redirect()->route('apart.home');
        }else{
            return view('login-failed');
        }
    }

    public function logout()
    {
        Auth::guard('apart')->logout();
        return redirect()->route('apart.login');
    }
}
