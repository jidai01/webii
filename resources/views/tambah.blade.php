@extends('main')
@section('content')
    <h1>{{ $content }}</h1>
    <div class="container">
        <h1>POST</h1>
        <form action="/kirim" method="post">
            @csrf
            <input type="text" class="form-control mb-4" name="nama" placeholder="Nama Lengkap">
            <input type="text" class="form-control mb-4" name="nim" placeholder="NIM">
            <textarea class="form-control mb-4" name="alamat" rows="5" cols="100" placeholder="Alamat"></textarea>

            <button type="submit">Tambah</button>
        </form>
    </div>
@endsection
