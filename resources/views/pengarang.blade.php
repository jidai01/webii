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
                <th>Cover</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pengarang as $index => $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->nama_pengarang }}</td>
                    <td>
                        <img class="img-thumbnail" width="50" src="{{ asset('storage/'.$row->cover) }}" alt="coverPengarang">
                    </td>
                    <td>
                        <a href="/editPengarang/{{ $row->id_pengarang }}" class="btn btn-sm btn-warning">Edit</a> | 
                        <a href="/deletePengarang/{{ $row->id_pengarang }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data pengarang.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection