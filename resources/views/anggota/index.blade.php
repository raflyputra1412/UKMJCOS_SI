<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome back! {{ auth()->user()->nama_lengkap }}, you're in dashboard anggota!</h1>
    {{-- <h1>welcome</h1> --}}
</body>
</html>