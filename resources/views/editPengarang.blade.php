@extends('main')
@section('content')
    <h1>{{ $content }}</h1>
    <div class="container">
        <form action="/update" method="post">
            @csrf
            <input type="hidden" name="id_pengarang" value="{{ $pengarang->id_pengarang }}">
            <input type="text" class="form-control mb-4" name="nama_pengarang" value="{{ $pengarang->nama_pengarang }}">

            <button type="submit">Edit</button>
        </form>
    </div>
@endsection
