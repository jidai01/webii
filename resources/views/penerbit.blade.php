@extends('main')
@section('content')
    <h1>{{ $content }}</h1>
    <h2>Daftar Penerbit</h2>
    <a href="/tambahPenerbit" class="btn btn-sm btn-success m-2">Tambah Penerbit</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Penerbit</th>
                <th>Cover</th>
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
                        <img class="img-thmbnail" width="50" src="{{ asset('storage/'.$row->cover) }}" alt="coverPenerbit">
                    </td>
                    <td>
                        <a href="/bukuPenerbit/{{ $row->id_penerbit }}" class="btn btn-sm btn-secondary">Lihat</a> |
                        <a href="/editPenerbit/{{ $row->id_penerbit }}" class="btn btn-sm btn-warning">Edit</a> |
                        <a href="/deletePenerbit/{{ $row->id_penerbit }}" class="btn btn-sm btn-danger"
                            onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
