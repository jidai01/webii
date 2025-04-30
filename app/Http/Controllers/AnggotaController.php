<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use Illuminate\Http\RedirectResponse;

class AnggotaController extends Controller
{
    public function anggota()
    {
        $title = "Anggota";
        $content = "Ini halaman Anggota dari controller";
        $anggota = Anggota::all();
        return view('anggota', compact('title', 'content', 'anggota'));
    }

    public function tambah()
    {
        $title = "Tambah Anggota";
        $content = "Ini halaman Tambah Anggota dari controller";

        return view('tambahAnggota', compact('title', 'content'));
    }

    public function kirim(Request $request): RedirectResponse
    {
        $validasi = $request->validate([
            'nim' => 'required|integer|between:10000000,99999999|unique:anggota,nim',
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        Anggota::insert($validasi);

        return redirect('/anggota');
    }

    public function update(Request $request): RedirectResponse
    {
        $nimLama = $request->nim_lama;

        $validasi = $request->validate([
            'nim' => 'required|integer|between:10000000,99999999|unique:anggota,nim,' . $nimLama . ',nim',
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        Anggota::where('nim', $nimLama)->update($validasi);

        return redirect('/anggota');
    }

    public function edit($id)
    {
        $title = "Edit Anggota";
        $content = "Ini halaman Edit Anggota dari controller";
        $anggota = Anggota::where('nim', $id)->firstOrFail();

        return view('editAnggota', compact('title', 'content', 'anggota'));
    }

    public function delete($id): RedirectResponse
    {
        Anggota::where('nim', $id)->delete();
        return redirect('/anggota');
    }
}
