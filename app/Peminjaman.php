<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'peminjaman';
    protected $fillable = [ 
        'id_user', 'acara', 'ruang', 'tanggal', 'waktu_mulai', 'waktu_selesai'
    ];

}
