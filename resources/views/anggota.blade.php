@extends('main')
@section('content')
    <h1>{{ $content }}</h1>
    <h2>Daftar Anggota</h2>
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
                    <td><a href="/editAnggota/{{ $row->nim }}">Edit</a> | <a href="/deleteAnggota/{{ $row->nim }}">Hapus</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection