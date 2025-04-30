<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PenerbitController extends Controller
{
    public function penerbit()
    {
        $title = "Penerbit";
        $content = "Ini halaman Penerbit dari controller";
        $penerbit = Penerbit::all();
        return view('penerbit', compact('title', 'content', 'penerbit'));
    }

    public function tambah()
    {
        $title = "Tambah Penerbit";
        $content = "Ini halaman Tambah Penerbit dari controller";
        return view('tambahPenerbit', compact('title', 'content'));
    }

    public function kirim(Request $request): RedirectResponse
    {
        $validasi = $request->validate([
            'nama_penerbit' => 'required'
        ]);

        Penerbit::insert($validasi);

        return redirect('/penerbit');
    }

    public function update(Request $request): RedirectResponse
    {
        $id_penerbit = $request->id_penerbit;

        $validasi = $request->validate([
            'nama_penerbit' => 'required'
        ]);

        Penerbit::where('id_penerbit', $id_penerbit)->update($validasi);

        return redirect('/penerbit');
    }

    public function edit($id)
    {
        $title = "Edit Penerbit";
        $content = "Ini halaman Edit Penerbit dari controller";
        $penerbit = Penerbit::find($id);

        return view('editPenerbit', compact('title', 'content', 'penerbit'));
    }

    public function delete($id): RedirectResponse
    {
        Penerbit::where('id_penerbit', $id)->delete();
        return redirect('/penerbit');
    }
}
