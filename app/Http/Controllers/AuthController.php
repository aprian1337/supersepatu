<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function process(Request $request)
    {
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        }else{
            return redirect()->back()->with('failed', 'Login gagal silakan coba kembali');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login',)->with('success', 'Berhasil keluar.');
    }
}
