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
        <form action="/kirimPenerbit" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" class="form-control mb-4" name="nama_penerbit" placeholder="Nama Penerbit">
            <input type="file" class="form-control mb-4" name="cover" placeholder="Cover">
            <button type="submit">Tambah</button>
        </form>
    </div>
@endsection
