<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        }

        p {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
        }

        th {
            background-color: #000;
            color: #fff;
            padding: 12px;
            text-align: center;
        }

        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        img.img-thumbnail {
            width: 60px;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
        }

        .no-data {
            color: #888;
            font-style: italic;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Daftar Buku</h2>
        <p>Berikut adalah koleksi buku yang tersedia di perpustakaan.</p>

        <table>
            <thead>
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
                @forelse ($buku as $index => $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->judul }}</td>
                        <td>{{ $row->pengarang->nama_pengarang ?? '-' }}</td>
                        <td>{{ $row->tahun }}</td>
                        <td>{{ Str::limit($row->deskripsi, 100, '...') }}</td>
                        <td>
                            <img class="img-thumbnail" src="{{ asset('storage/' . $row->cover) }}" alt="coverBuku">
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="no-data">Tidak ada data buku.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>