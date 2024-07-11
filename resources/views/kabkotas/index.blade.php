<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kabkota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Kabkota</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Provinsi</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kabkotas as $kabkota)
                <tr>
                    <td>{{ $kabkota->id }}</td>
                    <td>{{ $kabkota->nama }}</td>
                    <td>{{ $kabkota->latitude }}</td>
                    <td>{{ $kabkota->longitude }}</td>
                    <td>{{ $kabkota->provinsi->nama }}</td>
                    <td>{{ $kabkota->created_at }}</td>
                    <td>{{ $kabkota->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
