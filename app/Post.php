<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'post';
    protected $fillable = [ 
        'acara', 'tanggal', 'waktu_mulai', 'waktu_selesai'
    ];
}
