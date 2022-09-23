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
    <div class="flex h-screen xl:container overflow-auto">
        {{-- ini navbar --}}
        @include('pengurus.partials.navbar')

        <div class="w-screen min-h-fit ml-10 mt-2 text-white">
            <div class="flex justify-between w-19 ml-12 mr-20 mt-8">
                <span class="self-center text-2xl font-medium text-black uppercase">Inventaris</span>
                <a href="/inventaris/create" class="btn btn-primary">Create New</a>
            </div>

            <div class="overflow-x-auto">

              @if (session()->has('success'))
                    <div class="alert alert-success shadow-lg mt-2">
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

                {{-- @if ($inventaris->count()) --}}
                <table class="table table-compact w-5/6 mt-5 self-center ml-16">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Jumlah Barang</th>
                            <th>Sumber Dana</th>
                            <th>Kepemilikan</th>
                            <th>Pemegang</th>
                            <th>Tanggal Input</th>
                            <th colspan="2" class="text-center pr-10">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($inventaris as $invent)
                            <tr class="hover hover:cursor-pointer">
                                <td>{{ $invent->nama_barang }}</td>
                                <td>{{ $invent->harga}}</td>
                                <td>{{ $invent->jumlah_barang }}</td>
                                <td>{{ $invent->sumber_dana }}</td>
                                <td>{{ $invent->kepemilikan }}</td>
                                <td>{{ $invent->pemegang }}</td>
                                <td>{{ $invent->tgl_input }}</td>
                                <td><a href="/inventaris/{{ $invent->id }}/edit" class="btn btn-primary btn-xs text-white"> Edit
                                    </a></td>
                                <td class="pr-5">
                                    <form action="/inventaris/{{ $invent->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="btn bg-red-600 text-white btn-xs"> Delete </button>
                                    </form>
                                </td>
                                @empty
                                <td colspan="8" class="text-white text-center">Inventaris tidak ditemukan.</td>
                            </tr>
                            
                        @endforelse
                </table>

                <div class="ml-12 w-5/6">
                    {{ $inventaris->links() }}
                </div>
            </div>
        </div>

    </div>
</body>

</html>
