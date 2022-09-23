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
                {{-- <div>
                    <a href="/jenis_content" class="btn btn-warning hover:bg-yellow-500">Jenis Content</a>
                    <a href="/content/create" class="btn btn-primary">Tambah Content</a>
                </div> --}}
            </div>
            
            <div class="flex flex-col h-full">
                @foreach ($contents as $content)
                {{-- image --}}
                <div class="artboard artboard-horizontal phone-2 m-auto">
                    <figure><img src="{{ asset('image/content/'.$content->gambar) }}" alt="Content" /></figure>
                </div>
                
                {{-- article --}}
                <article class="max-w-6xl ml-10 prose prose-headings:font-medium prose-headings:text-black prose-headings:text-2xl pt-20">
                    <h2>
                        {{ $content->judul }}
                    </h2>
                    <div class="max-w-none prose prose-strong:text-gray-600 prose-em:text-gray-600 prose-p:text-gray-800">
                        <div class="flex flex-col">
                            <small class="text-green-600">Penulis Konten:  {{ $content->user->nama_lengkap }}</small>
                            <small class="text-green-600">Tanggal: {{ $content->created_at->format('d M Y') }}</small>
                        </div>
                        <p>{!! $content->deskripsi !!}</p>
                    </div>
                    <div class="justify-end mb-5">
                        <a href="/content/" class="btn btn-sm btn-primary no-underline text-white"> Back </a>
                    </div>
                </article>


{{-- 

                <div class="mt-44 bg-base-content">
                    <div class="card-body">
           
                    </div>
                </div> --}}
                @endforeach
            </div>

        </div>
        
    </div>
</body>

</html>
