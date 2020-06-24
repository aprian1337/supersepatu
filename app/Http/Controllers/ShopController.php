<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function buy($id)
    {
        $idBarang = $id;
        $buy = \App\Barang::where('id', $id)->first();
        return view('buying', compact('buy', 'idBarang'));
    }

    public function processBuying(Request $request)
    {
        $kode_unik = $request->kode_unik;
        if (\App\Transaksi::where('kode_unik', $kode_unik)->first() == null) {
            \App\Transaksi::create($request->all() + [
                'status' => 'Belum Bayar',
            ]);
        } else {
            $s = \App\Barang::where('kode_unik', $kode_unik);
            dd($s);
        }

        $harga = \App\Barang::select('harga')
            ->where('id', $request->id_barang)
            ->first();
        $tagihan = $harga;
        return view('done', compact('kode_unik', 'tagihan'))->with('success', 'Berhasil membuat pesanan, silakan selesaikan transaksi anda dengan membayar tagihan yang tertera.');
    }

    public function ConfirmBuying()
    {
        return view('confirm');
    }

    public function ProcessConfirm(Request $request)
    {
        $idTransaksi = \App\Transaksi::select('id')
            ->where('kode_unik', $request->kode_unik)
            ->first();
        if ($idTransaksi == null) {
            return redirect()->back()->with('failed', 'Kode unik tidak dapat ditemukan.');
        }else {
            $imageName = time() . '-' . $request->file->getClientOriginalName();
            $request->file->move(public_path('img/konfirmasi/'), $imageName);
            \App\Konfirmasi::create([
                'id_transaksi' => $idTransaksi->id,
                'src' => $imageName
            ]);
            return redirect()->intended('home')->with('success', 'Berhasil mengirim konfirmasi');
        }
    }
}
