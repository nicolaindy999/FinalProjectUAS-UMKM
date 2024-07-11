<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pembina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Pembina</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Tanggal Lahir</th>
                    <th>Tempat Lahir</th>
                    <th>Keahlian</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pembinas as $pembina)
                <tr>
                    <td>{{ $pembina->id }}</td>
                    <td>{{ $pembina->nama }}</td>
                    <td>{{ $pembina->gender }}</td>
                    <td>{{ $pembina->tgl_lahir }}</td>
                    <td>{{ $pembina->tmp_lahir }}</td>
                    <td>{{ $pembina->keahlian }}</td>
                    <td>{{ $pembina->created_at }}</td>
                    <td>{{ $pembina->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
