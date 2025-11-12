<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // ambil input dari form
        $credentials = $request->only('email', 'password');

        // cek ke database (tabel users)
        if (Auth::attempt($credentials)) {
            // login berhasil
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        // login gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }
}
