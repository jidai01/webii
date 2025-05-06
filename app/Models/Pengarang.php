<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pengarang extends Model
{
    protected $table = 'pengarang';
    protected $primaryKey = 'id_pengarang';
    protected $fillable = [
        'nama_pengarang',
    ];
    public $timestamps = false;

    function buku() : HasMany {
        return $this->hasMany(Buku::class, 'id_pengarang', 'id_pengarang');
    }
}
