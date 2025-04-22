<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function biodata()
    {
        $title = "Biodata";
        $content = "Ini halaman Biodata dari controller";
        $nim = "23122196";
        $nama = "Joseray Arimateia Lopes Da Cruz";
        $alamat = "Penfui";
        return view('biodata', compact('title', 'content', 'nim', 'nama', 'alamat'));
    }
}
