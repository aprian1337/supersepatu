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
        ->select('konfirmasi.id', 'konfirmasi.id_transaksi', 'transaksi.nama_pembeli', 'barang.merk', 'barang.tipe', 'transaksi.ukuran_pembeli', 'transaksi.nohp_pembeli', 'transaksi.norek_pembeli', 'transaksi.bank_pembeli', 'barang.harga', 'konfirmasi.src')
        ->get();
        return view('admin.konfirmasi', compact('konfirmasi'));
    }

    public function konfirmasiProcess($id){
        $idTransaksi = \App\Konfirmasi::where('id', $id)
        ->first();
        \App\Transaksi::where('id', $idTransaksi->id)
        ->update([
            'status' => 'Sudah bayar'
        ]);
        \App\Konfirmasi::find($id)->delete();
        return redirect()->back()->with('success', 'Berhasil konfirmasi pembayaran');
    }
}

