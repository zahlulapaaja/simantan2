<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>Email</td>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d->name }}</td>
            <td>{{ $d->email }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>