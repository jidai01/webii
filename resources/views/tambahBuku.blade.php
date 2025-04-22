@extends('main')
@section('content')
    <h1>{{ $content }}</h1>
    <div class="container">
        <h1>GET</h1>
        <form action="/kirim" method="get">
            <input type="text" class="form-control mb-4" name="judul" placeholder="Judul">
            <select class="form-control mb-4" name="pengarang">
                <option value="">-- Pilih Pengarang --</option>
                @foreach ($pengaranglist as $pengarang)
                    <option value="{{ $pengarang }}">{{ $pengarang }}</option>
                @endforeach
            </select>
            <select class="form-control mb-4" name="penerbit">
                <option value="">-- Pilih Penerbit --</option>
                @foreach ($penerbitlist as $penerbit)
                    <option value="{{ $penerbit }}">{{ $penerbit }}</option>
                @endforeach
            </select>
            <input type="text" class="form-control mb-4" name="tahun" placeholder="Tahun Terbit">
            <input type="text" class="form-control mb-4" name="deskripsi" placeholder="Deskripsi">

            <button type="submit">Tambah</button>
        </form>

        <br>
        <h1>POST</h1>
        <form action="/kirim" method="post">
            @csrf
            <input type="text" class="form-control mb-4" name="judul" placeholder="Judul">
            <select class="form-control mb-4" name="pengarang">
                <option value="">-- Pilih Pengarang --</option>
                @foreach ($pengaranglist as $pengarang)
                    <option value="{{ $pengarang }}">{{ $pengarang }}</option>
                @endforeach
            </select>
            <select class="form-control mb-4" name="penerbit">
                <option value="">-- Pilih Penerbit --</option>
                @foreach ($penerbitlist as $penerbit)
                    <option value="{{ $penerbit }}">{{ $penerbit }}</option>
                @endforeach
            </select>
            <input type="text" class="form-control mb-4" name="tahun" placeholder="Tahun Terbit">
            <input type="text" class="form-control mb-4" name="deskripsi" placeholder="Deskripsi">

            <button type="submit">Tambah</button>
        </form>
    </div>
@endsection
