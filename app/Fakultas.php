<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'fakultas';
    protected $fillable = ['nama_fakultas'];
}
