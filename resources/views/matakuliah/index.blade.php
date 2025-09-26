<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Mata Kuliah</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Mata Kuliah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matakuliahs as $matkul)
                <tr>
                    <td>{{ $matkul->kode_matkul }}</td>
                    <td>{{ $matkul->nama_matkul }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
