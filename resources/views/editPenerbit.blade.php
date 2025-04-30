@extends('main')
@section('content')
    <h1>{{ $content }}</h1>
    <div class="container">
        <form action="/update" method="post">
            @csrf
            <input type="hidden" name="id_penerbit" value="{{ $penerbit->id_penerbit }}">
            <input type="text" class="form-control mb-4" name="nama_penerbit" value="{{ $penerbit->nama_penerbit }}">

            <button type="submit">Edit</button>
        </form>
    </div>
@endsection
