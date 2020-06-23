<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_user');
            $table->string('acara');
            $table->string('ruang');
            // $table->string('barang');
            // $table->string('barang_tersedia');
            // $table->string('jumlah_pinjam');
            // $table->string('jumlah_request');
            $table->string('tanggal');
            $table->string('waktu_mulai');
            $table->string('waktu_selesai');
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
        Schema::dropIfExists('peminjaman');
    }
}
