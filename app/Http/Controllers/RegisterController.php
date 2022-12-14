<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(){
        $data['title'] = "Daftar";
        return view('register', $data);
    }

    public function aksi_register(Request $request){
        $request->validate([
            'nama'      => 'required',
            'no_telp'   => 'required',
            'email'     => 'required|email',
            'password'  => 'required|min:5'
        ]);

        // Tambah User Ke Database
        $tambah_user = User::insert([
            'nama'      => $request->nama,
            'no_telp'   => $request->no_telp,
            'email'     => $request->email,
            'password'  => bcrypt($request->password)
        ]);

        if($tambah_user){
            return redirect('dashboard')->with('success', 'Berhasil Mendaftar');
        } else {
            return back()->with('error', 'Gagal Mendaftar');
        }
    }
}
