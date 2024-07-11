<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Provinsi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Provinsi</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Ibukota</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($provinsis as $provinsi)
                <tr>
                    <td>{{ $provinsi->id }}</td>
                    <td>{{ $provinsi->nama }}</td>
                    <td>{{ $provinsi->ibukota }}</td>
                    <td>{{ $provinsi->latitude }}</td>
                    <td>{{ $provinsi->longitude }}</td>
                    <td>{{ $provinsi->created_at }}</td>
                    <td>{{ $provinsi->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
