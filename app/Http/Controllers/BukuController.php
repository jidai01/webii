<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Pengarang;
use App\Models\Penerbit;
use Illuminate\Http\RedirectResponse;

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
        $pengaranglist = Pengarang::all();
        $penerbitlist = Penerbit::all();
        return view('tambahBuku', compact('title', 'content', 'pengaranglist', 'penerbitlist'));
    }

    public function kirim(Request $request): RedirectResponse
    {
        $validasi = $request->validate([
            'judul' => 'required|unique:buku,judul',
            'id_pengarang' => 'required',
            'id_penerbit' => 'required',
            'tahun' => 'required|integer',
            'deskripsi' => 'required'
        ]);
        $path = $request->file('cover')->storePublicly('buku', 'public');
        $validasi['cover'] = $path;

        Buku::insert($validasi);

        return redirect('/buku');
    }

    public function update(Request $request): RedirectResponse
    {
        $id_buku = $request->id_buku;

        $validasi = $request->validate([
            'judul' => 'required|unique:buku,judul,' . $id_buku . ',id_buku',
            'id_pengarang' => 'required',
            'id_penerbit' => 'required',
            'tahun' => 'required|integer',
            'deskripsi' => 'required'
        ]);

        Buku::where('id_buku', $id_buku)->update($validasi);

        return redirect('/buku');
    }

    public function edit($id)
    {
        $title = "Edit Buku";
        $content = "Ini halaman Edit Buku dari controller";
        $buku = Buku::find($id);

        $pengaranglist = Pengarang::all();
        $penerbitlist = Penerbit::all();

        return view('editBuku', compact('title', 'content', 'buku', 'pengaranglist', 'penerbitlist'));
    }

    public function delete($id): RedirectResponse
    {
        Buku::where('id_buku', $id)->delete();
        return redirect('/buku');
    }

    public function byPenerbit($id) {
        $title = "Buku Penerbit";
        $content = "Ini halaman Buku Penerbit dari controller";
        $penerbit = Penerbit::find($id);

        return view('bukuPenerbit', compact('title', 'content', 'penerbit'));
    }
}
