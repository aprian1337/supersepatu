<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = [
        'nama_pembeli',
        'id_barang',
        'ukuran_pembeli',
        'kode_unik',
        'nama_pembeli',
        'nohp_pembeli',
        'alamat_pembeli',
        'bank_pembeli',
        'norek_pembeli',
        'status'
    ];

    public function barang(){
        return belongsTo('\App\Barang');
    }
}
