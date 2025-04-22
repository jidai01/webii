@extends('main')
@section('content')
    <h1>{{ $content }}</h1>
    <h2>Daftar Peminjaman</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Peminjam</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($peminjaman as $pinjam)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $pinjam['nama'] }}</td>
                    <td>{{ $pinjam['judul'] }}</td>
                    <td>{{ $pinjam['tanggal_pinjam'] }}</td>
                    <td>{{ $pinjam['tanggal_kembali'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
