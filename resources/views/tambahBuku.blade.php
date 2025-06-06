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
        <form action="/kirimBuku" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" class="form-control mb-4" name="judul" placeholder="Judul">
            <select class="form-control mb-4" name="id_pengarang">
                <option value="">-- Pilih Pengarang --</option>
                @foreach ($pengaranglist as $pengarang)
                    <option value="{{ $pengarang->id_pengarang }}">{{ $pengarang->nama_pengarang }}</option>
                @endforeach
            </select>
            <select class="form-control mb-4" name="id_penerbit">
                <option value="">-- Pilih Penerbit --</option>
                @foreach ($penerbitlist as $penerbit)
                    <option value="{{ $penerbit->id_penerbit }}">{{ $penerbit->nama_penerbit }}</option>
                @endforeach
            </select>
            <input type="text" class="form-control mb-4" name="tahun" placeholder="Tahun Terbit">
            <textarea class="form-control mb-4" name="deskripsi" rows="5" cols="100" placeholder="Deskripsi"></textarea>
            <input type="file" class="form-control mb-4" name="cover" placeholder="Cover">

            <button type="submit">Tambah</button>
        </form>
    </div>
@endsection
