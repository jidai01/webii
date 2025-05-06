<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    protected $fillable = [
        'judul',
        'id_pengarang',
        'id_penerbit',
        'tahun',
        'deskripsi'
    ];
    public $timestamps = false;
    public function pengarang()
    {
        return $this->belongsTo(Pengarang::class, 'id_pengarang', 'id_pengarang');
    }

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'id_penerbit', 'id_penerbit');
    }
}
