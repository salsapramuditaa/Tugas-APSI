<!DOCTYPE html>
<html>
<head>
    <title>Film yang Sudah Ditonton</title>
</head>
<body>
    <h1>Daftar Film yang Sudah Ditonton</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>Judul</th>
            <th>Genre</th>
            <th>Rating</th>
        </tr>
        @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->genre }}</td>
                <td>{{ $movie->rating }}/10</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
