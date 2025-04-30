<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengarang extends Model
{
    protected $table = 'pengarang';
    protected $primaryKey = 'id_pengarang';
    protected $fillable = [
        'nama_pengarang',
    ];
    public $timestamps = false;
}
