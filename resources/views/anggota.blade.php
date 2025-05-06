@extends('main')
@section('content')
    <h1>{{ $content }}</h1>
    <h2>Daftar Anggota</h2>
    <a href="/tambahAnggota" class="btn btn-sm btn-success m-2">Tambah Anggota</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($anggota as $row)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->nim }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->alamat }}</td>
                    <td>
                        <a href="/editAnggota/{{ $row->id_anggota }}" class="btn btn-sm btn-warning">Edit</a> | <a href="/deleteAnggota/{{ $row->id_anggota }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection