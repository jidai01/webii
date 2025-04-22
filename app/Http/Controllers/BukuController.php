<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function buku()
    {
        $title = "Buku";
        $content = "Ini halaman Buku dari controller";
        $buku = Buku::all();
        return view('buku', compact('title', 'content', 'buku'));
    }

    public function tambah()
    {
        $title = "Tambah Buku";
        $content = "Ini halaman Tambah Buku dari controller";

        $pengaranglist = [
            'Aldwin',
            'Ari',
            'Angel',
            'Desti',
            'Via'
        ];

        $penerbitlist = [
            'Gramedia',
            'Erlangga',
            'Mizan'
        ];

        return view('tambahBuku', compact('title', 'content', 'pengaranglist', 'penerbitlist'));
    }

    public function kirim(Request $request)
    {
        $data = [
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahun' => $request->tahun,
            'deskripsi' => $request->deskripsi
        ];

        Buku::insert($data);

        return redirect('/buku');
    }
}
