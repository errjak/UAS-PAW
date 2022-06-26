<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function postlogin(Request $request)
    {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]
        );

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->level == 'admin') {
                return redirect()->intended('admin');
            } elseif ($user->level == 'user') {
                return redirect()->intended('user');
            } elseif ($user->level == 'guru') {
                return redirect()->intended('guru');
            }
            return redirect()->intended('/');
        }

        return redirect('login')
        ->withInput()
        ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
    
}
