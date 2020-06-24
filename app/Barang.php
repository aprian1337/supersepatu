<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['merk', 'tipe', 'src', 'harga', 'published'];

    public function transaksi(){
        return hasMany('\App\Transaksi');
    }
}
