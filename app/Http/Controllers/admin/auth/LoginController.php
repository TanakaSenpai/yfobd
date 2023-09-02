<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return to_route('admin.dashboard');
        } else {
            return redirect()->back()->with('error', 'Email or password is wrong');
        }
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return to_route('admin.login');
    }
}
