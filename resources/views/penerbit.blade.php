@extends('main')
@section('content')
    <h1>{{ $content }}</h1>
    <h2>Daftar Buku</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Penerbit</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($penerbit as $row)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->nama_penerbit }}</td>
                    <td><a href="/editPenerbit/{{ $row->id_penerbit }}">Edit</a> | <a href="/delete/{{ $row->id_penerbit }}">Hapus</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection