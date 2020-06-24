<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_barang')->unsigned();
            $table->foreign('id_barang')
            ->references('id')
            ->on('barang')
            ->onDelete('cascade');
            $table->string('nama_pembeli', 60);
            $table->integer('ukuran_pembeli');
            $table->string('nohp_pembeli', 15);
            $table->text('alamat_pembeli');
            $table->string('bank_pembeli', 50);
            $table->string('norek_pembeli', 50);
            $table->string('kode_unik', 20);
            $table->string('status', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
