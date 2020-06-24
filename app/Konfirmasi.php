<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konfirmasi extends Model
{
    protected $table = 'konfirmasi';
    protected $fillable = ['id_transaksi', 'src'];
}
