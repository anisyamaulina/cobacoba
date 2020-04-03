<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'ruang';
    protected $fillable = ['nama_ruang'];
}
