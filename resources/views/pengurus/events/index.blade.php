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
                <span class="self-center text-2xl font-medium text-black uppercase">Event</span>
                <a href="/events/create" class="btn btn-primary">Create New</a>
            </div>

            <div class="overflow-x-auto">
                {{-- message jika crud berhasil --}}
                @if (session()->has('success'))
                    <div class="alert alert-success shadow-lg mt-2 ml-12">
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

                <table class="table table-compact w-5/6 ml-16 mt-5">
                    <thead>
                        <tr>
                            <th>Nama Event</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Ketua Event</th>
                            <th>view</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($events as $event)
                            <tr class="hover hover:cursor-pointer">
                                <td>{{ $event->nama_event }}</td>
                                <td>{{ $event->tanggal }}</td>
                                <td>{{ $event->waktu }}</td>
                                <td>{{ $event->ketua_event }}</td>
                                <td class="p-0"><a href="/events/{{ $event->id }}/edit"
                                        class="btn btn-primary btn-xs text-white"> Detail
                                    </a></td>
                                <td class="p-0">
                                    <form action="/events/{{ $event->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="btn bg-red-600 text-white btn-xs"> Delete </button>
                                    </form>
                                </td>
                                @empty
                                <td colspan="8" class="text-white text-center">Event tidak ditemukan.</td>
                            </tr>
                        @endforelse
                </table>
                <div class="ml-12 w-5/6">
                    {{-- {{ $events->links() }} --}}
                </div>

            </div>
        </div>

    </div>
</body>

</html>
