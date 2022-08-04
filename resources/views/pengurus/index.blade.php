<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Dashboard Pengurus</title>
</head>
<body class="h-screen bg-white">
    {{-- <h1>welcome back {{ auth()->user()->nama_lengkap }}, kamu ada di dashboard pengurus!</h1> --}}

<div class="flex h-full">
    @include('pengurus.partials.navbar')
    
</div>
    
    
</body>
</html>