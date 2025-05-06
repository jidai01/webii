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

        <form action="/updateAnggota" method="post">
            @csrf
            <input type="hidden" name="nim_lama" value="{{ $anggota->nim }}">
            <input type="text" class="form-control mb-4" name="nim"value="{{ $anggota->nim }}">
            <input type="text" class="form-control mb-4" name="nama" value="{{ $anggota->nama }}">
            <textarea class="form-control mb-4" name="alamat" rows="5" cols="100">{{ $anggota->alamat }}</textarea>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
