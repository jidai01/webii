<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    protected $table = 'penerbit';
    protected $primaryKey = 'id_penerbit';
    protected $fillable = [
        'nama_penerbit',
    ];
    public $timestamps = false;
}
