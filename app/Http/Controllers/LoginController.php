<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        $data['title'] = "Login";
        return view('login', $data);
    }

    public function aksi_login(Request $request) {
        // return $request->all();
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        $cek_login = Auth::attempt([
            'email'     => $request->email,
            'password'  => $request->password
        ]);

        if($cek_login){
            return redirect()->intended('dashboard');
        } else {
            return back()->with('error', 'Email Atau Password Salah!');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/')->with('success', 'Berhasil Logout!');
    }
}
