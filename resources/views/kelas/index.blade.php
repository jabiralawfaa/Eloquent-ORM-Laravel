<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Kelas</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Kelas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kelases as $kelas)
                <tr>
                    <td>{{ $kelas->id_kelas }}</td>
                    <td>{{ $kelas->nama_kelas }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
