<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'peminjaman';
    protected $fillable = [ 
        'acara', 'ruang', 'barang', 'barang_tersedia', 'jumlah_pinjam', 'jumlah_request', 'tanggal', 'waktu_mulai', 'waktu_selesai'
    ];
}
