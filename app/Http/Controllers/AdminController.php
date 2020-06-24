<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function kelolaBarang(){
        return view('admin.kelolaBarang');
    }

    public function transaksi(){
        $transaksi = \App\Transaksi::all();
        return view('admin.transaksi', compact('transaksi'));
    }

    public function konfirmasi(){

        $konfirmasi = DB::table('transaksi')
        ->join('konfirmasi', 'transaksi.id', '=', 'konfirmasi.transaksi_id')
        ->get();
        return view('admin.konfirmasi', compact('konfirmasi'));
    }
}

