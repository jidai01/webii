@extends('main')
@section('content')
    <h1>{{ $content }}</h1>
    <h2>Daftar Pengarang</h2>
    <a href="/tambahPengarang" class="btn btn-sm btn-success m-2">Tambah Pengarang</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengarang</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($pengarang as $row)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->nama_pengarang }}</td>
                    <td>
                        <a href="/editPengarang/{{ $row->id_pengarang }}" class="btn btn-sm btn-warning">Edit</a> | <a href="/deletePengarang/{{ $row->id_pengarang }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection