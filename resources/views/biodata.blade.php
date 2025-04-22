@extends('main')
@section('content')
    <h1>{{ $content }}</h1>
    <table class="table table-strip">
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td>{{ $nim }}</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $nama }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $alamat }}</td>
        </tr>
    </table>
@endsection
