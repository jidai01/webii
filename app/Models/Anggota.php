<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $primaryKey = 'nim';
    protected $fillable = [
        'nim', 
        'nama',
        'alamat'
    ];
    public $timestamps = false;
}
