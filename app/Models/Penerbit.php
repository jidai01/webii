<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penerbit extends Model
{
    protected $table = 'penerbit';
    protected $primaryKey = 'id_penerbit';
    protected $fillable = [
        'nama_penerbit',
    ];
    public $timestamps = false;
    
    function buku() : HasMany {
        return $this->hasMany(Buku::class, 'id_penerbit', 'id_penerbit');
    }
}
