<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function pinjam()
    {
        $title = "Pinjam";
        $content = "Ini halaman Pinjam dari controller";

        $peminjaman = [
            [
                'nama' => 'Ari',
                'judul' => 'Algoritma Dasar',
                'tanggal_pinjam' => '25-03-2025',
                'tanggal_kembali' => '26-03-2025'
            ],
            [
                'nama' => 'Aldwin',
                'judul' => 'Pemrogaman Aplikasi Mobile',
                'tanggal_pinjam' => '24-03-2025',
                'tanggal_kembali' => '27-03-2025'
            ]
        ];

        return view('pinjam', compact('title', 'content', 'peminjaman'));
    }
}
