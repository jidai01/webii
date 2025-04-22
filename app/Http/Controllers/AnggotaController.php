<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function anggota(){
        $title = "Anggota";
        $content = "Ini halaman Anggota dari controller";
        return view('anggota', compact('title', 'content'));
    }

    public function tambah()
    {
        $title = "Tambah";
        $content = "Ini halaman Tambah Anggota dari controller";
        return view('tambah', compact('title', 'content'));
    }

    public function kirim(Request $request){
        $nim = $request->nim;
        $nama = $request->nama;
        $alamat = $request->alamat;
        $title = "Biodata";
        $content = "";

        return view('biodata', compact('nim', 'nama', 'alamat', 'title', 'content'));
    }
}
