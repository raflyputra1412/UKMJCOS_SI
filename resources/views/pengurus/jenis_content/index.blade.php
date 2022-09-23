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
            <div class="flex justify-between w-19 mr-20 ml-12 mt-8">
                <span class="self-center text-2xl font-medium text-black uppercase">Jenis Content</span>
                <div>
                    <a href="/jenis_content/create" class="btn btn-warning">Tambah Jenis Content</a>
                </div>
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
                <table class="table table-compact w-5/6 mt-5 self-center m-auto">
                    <thead>
                        <tr>
                            {{-- <th>No</th> --}}
                            <th class="pl-5">Nama Jenis</th>
                            <th colspan="5" class="text-center pr-10">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jenis_content as $jenis)
                            <tr class="hover hover:cursor-pointer">
                                {{-- <td>{{ $nomor++; }}</td> --}}
                                <td class="pl-5">{{ $jenis->nama_jenis }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="w-0"><a href="/jenis_content/{{ $jenis->id }}/edit" class="btn btn-primary btn-xs text-white"> Edit
                                    </a></td>
                                <td class="text-left">
                                    <form action="/jenis_content/{{ $jenis->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="btn bg-red-600 text-white btn-xs"> Delete </button>
                                    </form>
                                </td>
                                @empty
                                <td colspan="3" class="text-white text-center">Jenis Content tidak ditemukan.</td>
                            </tr>
                        @endforelse
                </table>
    
                <div class="ml-20 w-5/6">
                    {{ $jenis_content->links() }}
                </div>     
            </div>
    
        </div>
        
        
        </div>

    
</body>

</html>
