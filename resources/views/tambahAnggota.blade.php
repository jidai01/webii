@extends('main')
@section('content')
    <h1>{{ $content }}</h1>
    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1>POST</h1>
        <form action="/kirimAnggota" method="post">
            @csrf
            <input type="text" class="form-control mb-4" name="nim" placeholder="NIM">
            <input type="text" class="form-control mb-4" name="nama" placeholder="Nama">
            <textarea class="form-control mb-4" name="alamat" rows="5" cols="100" placeholder="Alamat"></textarea>

            <button type="submit">Tambah</button>
        </form>
    </div>
@endsection
