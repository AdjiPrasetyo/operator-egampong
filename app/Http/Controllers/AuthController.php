<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index()
    {
        return view('auth/login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infoLogin)) {
            if (Auth::user()->role === 'admin') {
                return redirect('admin');
            }
            if (Auth::user()->role === 'sukadamai') {
                return redirect('sukadamai');
            } elseif (Auth::user()->role === 'kebunbaru') {
                return redirect('kebunbaru');
            } elseif (Auth::user()->role === 'rejosari') {
                return redirect('rejosari');
            } elseif (Auth::user()->role === 'margoyoso') {
                return redirect('margoyoso');
            } elseif (Auth::user()->role === 'payungraja') {
                return redirect('payungraja');
            }
        } else {
            return redirect()->route('login')->withErrors('Email atau Password salah');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
