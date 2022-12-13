<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $authentication = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);
        if ($authentication) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } else {
            return redirect('/login');
        };
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function daftar_view()
    {
        return view('register-adam');
    }

    public function login_view()
    {
        return view('login-adam');
    }

    public function daftar(Request $request)
    {
        if ($request->password1 != $request->password) {
            return redirect('/daftar');
        } else {
            $encrypted_password = bcrypt($request->password);
            User::create([
                'email' => $request->email,
                'name' => $request->nama,
                'no_hp' => $request->nohp,
                'password' => $encrypted_password,
            ]);
        }
        return redirect('/login');
    }
}
