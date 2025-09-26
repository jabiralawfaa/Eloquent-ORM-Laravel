<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar KTM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Kartu Tanda Mahasiswa (KTM)</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nomor KTM</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ktms as $ktm)
                <tr>
                    <td>{{ $ktm->no_ktm }}</td>
                    <td>{{ $ktm->nim }}</td>
                    <td>{{ $ktm->mahasiswa->nama ?? 'N/A' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
