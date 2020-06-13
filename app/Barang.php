<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'barang';
    protected $fillable = [
        'nama_barang', 'barang_tersedia', 'jumlah_pinjam', 'jenis'
    ];
}
