<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ $title }}</title>
</head>

<body class="w-full h-full bg-white">
    <div class="flex h-full xl:container overflow-auto">
        {{-- ini navbar --}}
        @include('pengurus.partials.navbar')

        <div class="w-screen min-h-fit ml-10 mt-2 text-white">
            <span class="ml-2 text-black font-bold uppercase divide-y divide-yellow-500">Tambah Anggota</span>
            @include('pengurus.partials.form_anggota')
        </div>
    </div>
</body>

</html>
