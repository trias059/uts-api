<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h2>Daftar Film</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Genre</th>
                <th>Sutradara</th>
                <th>Tahun Rilis</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($films as $film)
                <tr>
                    <td>{{ $film->id }}</td>
                    <td>{{ $film->title }}</td>
                    <td>{{ $film->genre }}</td>
                    <td>{{ $film->director }}</td>
                    <td>{{ $film->release_year ?? '-' }}</td>
                    <td>{{ $film->rating }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
