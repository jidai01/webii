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
                <th>Cover</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($anggota as $index => $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->nim }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->alamat }}</td>
                    <td>
                        <img class="img-thumbnail" width="50" src="{{ asset('storage/'.$row->cover) }}" alt="coverAnggota">
                    </td>
                    <td>
                        <a href="/editAnggota/{{ $row->nim }}" class="btn btn-sm btn-warning">Edit</a> | 
                        <a href="/deleteAnggota/{{ $row->nim }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data anggota.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection