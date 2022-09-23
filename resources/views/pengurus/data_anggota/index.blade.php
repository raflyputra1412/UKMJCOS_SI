<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ $title }}</title>
</head>

<body class="h-screen">
    {{-- <h1>welcome back {{ auth()->user()->nama_lengkap }}, kamu ada di dashboard pengurus!</h1> --}}

    <div class="flex h-full">

        @include('pengurus.partials.navbar')

        <div class="w-full h-full bg-slate-100">
            {{-- data anggota dan button new --}}
            <div class="flex justify-between w-19 ml-12 mr-20 mt-8">
                <span class="self-center text-2xl font-medium text-black uppercase">Data Anggota</span>
                <a href="/data_anggota/create" class="btn btn-primary">Add Anggota</a>
            </div>

            <div class="overflow-x-auto">
                @if (session()->has('success'))
                    <div class="alert alert-success shadow-lg mt-2 ml-20">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    </div>
                @endif
                <table class="table table-compact w-5/6 ml-16 mt-5 text-white">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama Lengkap</th>
                            <th>Program Studi</th>
                            <th>Angkatan</th>
                            <th>Jabatan</th>
                            <th>View</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="hover hover:cursor-pointer">
                                <td>{{ $user->nim }}</td>
                                <td>{{ $user->nama_lengkap }}</td>
                                <td>{{ $user->program_studi }}</td>
                                <td>{{ $user->angkatan }}</td>
                                <td>{{ $user->jabatan }}</td>
                                <td><a href="/data_anggota/{{ $user->id }}/edit"
                                        class="btn btn-primary btn-xs text-white"> Detail </a></td>
                                <td>
                                    <form action="/data_anggota/{{ $user->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="btn bg-red-600 text-white btn-xs"> Delete </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="ml-20 w-5/6">
                    {{ $users->links() }}
                </div>     
            </div>
        </div>
    </div>
</body>
</html>
