@extends('main')
@section('content')
    <h1>{{ $content }}</h1>
    <h2>Daftar Penerbit</h2>
    <a href="/tambahPenerbit" class="btn btn-sm btn-success">Tambah Penerbit</a>
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
                    <td>
                        <a href="/editPenerbit/{{ $row->id_penerbit }}" class="btn btn-sm btn-warning">Edit</a> | <a href="/deletePenerbit/{{ $row->id_penerbit }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection