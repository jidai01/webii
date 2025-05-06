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

        <form action="/updatePenerbit" method="post">
            @csrf
            <input type="hidden" name="id_penerbit" value="{{ $penerbit->id_penerbit }}">
            <input type="text" class="form-control mb-4" name="nama_penerbit" value="{{ $penerbit->nama_penerbit }}">

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
