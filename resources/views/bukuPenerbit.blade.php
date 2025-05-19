@extends('main')
@section('content')
    <h1>{{ $content }}</h1>
    <h2>Oleh Penerbit: {{ $penerbit->nama_penerbit }}</h2>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tahun</th>
                <th>Deskripsi</th>
                <th>Cover</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($penerbit->buku as $index => $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->judul }}</td>
                    <td>{{ $row->pengarang->nama_pengarang ?? '-' }}</td>
                    <td>{{ $row->tahun }}</td>
                    <td>{{ $row->deskripsi }}</td>
                    <td>
                        <img class="img-thumbnail" width="50" src="{{ asset('storage/'.$row->cover) }}" alt="coverBuku">
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