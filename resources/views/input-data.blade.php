<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('input-data') }}">
        @csrf
        <label>Masukkan Nama Mu</label>
        <input type="text" name="nama"/>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>