@extends('main')
@section('content')
    <h1>{{ $content }}</h1>
    <h2>Daftar Buku</h2>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($buku as $index => $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->judul }}</td>
                    <td>{{ $row->pengarang->nama_pengarang ?? '-' }}</td>
                    <td>{{ $row->penerbit->nama_penerbit ?? '-' }}</td>
                    <td>{{ $row->tahun }}</td>
                    <td>{{ $row->deskripsi }}</td>
                    <td>
                        <a href="/editBuku/{{ $row->id_buku }}" class="btn btn-sm btn-warning">Edit</a> | <a href="/deleteBuku/{{ $row->id_buku }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data buku.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection