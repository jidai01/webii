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

        <form action="/updateBuku" method="post">
            @csrf
            <input type="hidden" name="id_buku" value="{{ $buku->id_buku }}">
            <input type="text" class="form-control mb-4" name="judul" placeholder="Judul" value="{{ $buku->judul }}">
            <select class="form-control mb-4" name="pengarang">
                @foreach ($pengaranglist as $pengarang)
                    <option value="{{ $pengarang }}" @selected($pengarang == $buku->pengarang)>{{ $pengarang }}</option>
                @endforeach
            </select>
            <select class="form-control mb-4" name="penerbit">
                @foreach ($penerbitlist as $penerbit)
                    <option value="{{ $penerbit }}" @selected($penerbit == $buku->penerbit)>{{ $penerbit }}</option>
                @endforeach
            </select>
            <input type="text" class="form-control mb-4" name="tahun" placeholder="Tahun Terbit" value="{{ $buku->tahun }}">
            <textarea class="form-control mb-4" name="deskripsi" rows="5" cols="100" placeholder="Deskripsi">{{ $buku->deskripsi }}</textarea>

            <button type="submit">Edit</button>
        </form>
    </div>
@endsection
