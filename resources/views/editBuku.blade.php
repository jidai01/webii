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

            <input type="text" class="form-control mb-4" name="judul" placeholder="Judul"
                value="{{ old('judul', $buku->judul) }}">

            <select class="form-control mb-4" name="id_pengarang">
                <option value="">-- Pilih Pengarang --</option>
                @foreach ($pengaranglist as $pengarang)
                    <option value="{{ $pengarang->id_pengarang }}" @selected($pengarang->id_pengarang == $buku->id_pengarang)>
                        {{ $pengarang->nama_pengarang }}
                    </option>
                @endforeach
            </select>

            <select class="form-control mb-4" name="id_penerbit">
                <option value="">-- Pilih Penerbit --</option>
                @foreach ($penerbitlist as $penerbit)
                    <option value="{{ $penerbit->id_penerbit }}" @selected($penerbit->id_penerbit == $buku->id_penerbit)>
                        {{ $penerbit->nama_penerbit }}
                    </option>
                @endforeach
            </select>

            <input type="text" class="form-control mb-4" name="tahun" placeholder="Tahun Terbit"
                value="{{ old('tahun', $buku->tahun) }}">

            <textarea class="form-control mb-4" name="deskripsi" rows="5" placeholder="Deskripsi">{{ old('deskripsi', $buku->deskripsi) }}</textarea>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
