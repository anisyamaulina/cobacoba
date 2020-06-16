<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fakultas_prodi extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'fakultas_prodi';
    protected $fillable = [
        'fakultas', 'prodi'
    ];
}
