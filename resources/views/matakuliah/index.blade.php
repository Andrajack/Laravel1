<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mata Kuliah</title>
</head>
<body>
    <h1>Data Mata Kuliah</h1>

    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <p>
        <a href="{{ route('matakuliah.create') }}">Tambah Mata Kuliah</a>
    </p>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($matakuliahs as $m)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $m->kode_matakuliah }}</td>
                <td>{{ $m->nama_matakuliah }}</td>
                <td>{{ $m->sks }}</td>
                <td>
                    <a href="{{ route('matakuliah.show', $m->id) }}">Detail</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">Belum ada data mata kuliah.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>