<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ $title }}</title>
</head>

<body class="w-full h-screen bg-white">
    <div class="flex h-full xl:container overflow-auto">

        {{-- ini navbar --}}
        @include('pengurus.partials.navbar')

        <div class="w-screen h-full ml-10 mt-2 text-white">
            <div class="flex justify-between w-19 mr-20 ml-12 mt-8">
                <span class="self-center text-2xl font-medium text-black uppercase">Content</span>
                <div>
                    <a href="/jenis_content" class="btn btn-warning hover:bg-yellow-500">Jenis Content</a>
                    <a href="/content/create" class="btn btn-primary">Tambah Content</a>
                </div>
            </div>

            @if (session()->has('success'))
            <div class="alert alert-success shadow-lg mt-4 ml-4">
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
    

            {{-- card content --}}
            {{-- SRC ke folder image lokal --}}
            {{-- src="{{ asset('image/content/'.$content->gambar) }}"   --}}
            {{-- SRC ke link lorem image bwt random image --}}
            {{-- src="{{ $content->gambar }}" --}}
            <div class="flex flex-wrap justify-start">
                @forelse ($contents as $content)
                <div class="card w-80 bg-base-100 shadow-xl mt-14 ml-16 hover:cursor-pointer hover:transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-100 ">
                    <figure><img src="{{ asset('image/content/'.$content->gambar) }}" alt="Content" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">
                            {{ Str::limit($content->judul, 30) }}
                        </h2>
                        <p>{{ Str::limit($content->ringkasan, 50) }}</p>

                        <div class="btn btn-xs btn-warning w-6/12 m-auto mb-4 no-animation">{{ $content->jenis_content->nama_jenis }}</div>
                        <div class="card-actions flex justify-center">
                            <button><a href="/content/{{ $content->id }}" class="btn btn-xs btn-accent">Show</a> </button>
                            <button><a href="/content/{{ $content->id }}/edit" class="btn btn-xs btn-info hover:bg-cyan-500">Edit</a> </button>
                            
                            <form action="/content/{{ $content->id }}" method="POST"">
                                @method('delete')
                                @csrf
                                <button class="btn btn-xs btn-error hover:bg-red-600">Delete </button>
                            </form>

                        </div>
                    </div>
                </div>
                
                @empty
                    <h1 class="text-black m-auto pt-14">Content tidak ditemukan.</h1>
                @endforelse
            </div>
            
            <div class="ml-12 w-5/6">
                {{ $contents->links() }}
            </div>
        </div>
        
    </div>
</body>

</html>
