<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

        $konfirmasi = DB::table('konfirmasi')
        ->join('transaksi', 'konfirmasi.id_transaksi', '=', 'transaksi.id')
        ->join('barang', 'transaksi.id_barang', '=', 'barang.id')
        ->select('konfirmasi.id', 'transaksi.nama_pembeli', 'barang.merk', 'barang.tipe', 'transaksi.ukuran_pembeli', 'transaksi.nohp_pembeli', 'transaksi.norek_pembeli', 'transaksi.bank_pembeli', 'barang.harga', 'konfirmasi.src')
        ->get();
        return view('admin.konfirmasi', compact('konfirmasi'));
    }
}

