@extends('main')
@section('content')
    <h1>{{ $content }}</h1>
    <h2>Daftar Buku</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($buku as $row)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->judul }}</td>
                    <td>{{ $row->pengarang }}</td>
                    <td>{{ $row->penerbit }}</td>
                    <td>{{ $row->tahun }}</td>
                    <td>{{ $row->deskripsi }}</td>
                    <td><a href="/editBuku/{{ $row->id_buku }}">Edit</a> | <a href="/deleteBuku/{{ $row->id_buku }}">Hapus</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection