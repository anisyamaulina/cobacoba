<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'prodi';
    protected $fillable = ['name'];
}
