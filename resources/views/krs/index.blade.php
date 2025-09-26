<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar KRS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Kartu Rencana Studi (KRS)</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Kode Mata Kuliah</th>
                    <th>Nama Mata Kuliah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($krss as $krs)
                <tr>
                    <td>{{ $krs->nim }}</td>
                    <td>{{ $krs->mahasiswa->nama ?? 'N/A' }}</td>
                    <td>{{ $krs->kode_matkul }}</td>
                    <td>{{ $krs->mataKuliah->nama_matkul ?? 'N/A' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
