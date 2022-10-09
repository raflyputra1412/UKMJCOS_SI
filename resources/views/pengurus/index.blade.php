<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Dashboard Pengurus</title>
</head>
<body class="w-full h-full bg-white">
    <div class="flex h-screen xl:container overflow-auto">
        {{-- ini navbar --}}
        @include('pengurus.partials.navbar')

        <div class="w-screen min-h-fit ml-10 mt-2 text-white">
            
            
            <!-- component -->
            <div class="flex flex-col">
                <h2 class="mb-4 text-2xl font-medium text-black mt-5">Admin Dashboard</h2>
            
                <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
                    <div class="flex h-12 w-12 items-center justify-center rounded-full border border-blue-100 bg-blue-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                    </div>
            
                    <div class="ml-4 text-black">
                    <h2 class="font-semibold">Upcoming Event</h2>
                    <p class="mt-2 text-sm text-gray-500">
                        @if($upcoming_event == true)
                            {{ $upcoming_event->nama_event }}
                            @else
                            <p class="mt-2 text-sm text-gray-500">Event not found</p>
                        @endif
                    </p>
                    </div>
                </div>
            
                <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
                    <div class="flex h-12 w-12 items-center justify-center rounded-full border border-orange-100 bg-orange-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    </div>
            
                    <div class="ml-4 text-black">
                    <h2 class="font-semibold">{{ $user }} Anggota </h2>
                        @foreach ($last_added_user as $item)
                            <p class="mt-2 text-sm text-gray-500">Last added {{ $item->created_at->diffForHumans() }}</p>
                        @endforeach
                    </div>
                </div>
                <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
                    <div class="flex h-12 w-12 items-center justify-center rounded-full border border-red-100 bg-red-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    </div>
            
                    <div class="ml-4 text-black">
                    <h2 class="font-semibold">{{ $content }} Posts</h2> 
                        @forelse ($last_added_content as $item)
                            <p class="mt-2 text-sm text-gray-500">Last authored {{ $item->created_at->diffForHumans() }}</p>
                            @empty
                            <p class="mt-2 text-sm text-gray-500">Content not found</p>
                        @endforelse
                    </div>
                </div>
                <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
                    <div class="flex h-12 w-12 items-center justify-center rounded-full border border-indigo-100 bg-indigo-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                    </div>
            
                    <div class="ml-4 text-black">
                    <h2 class="font-semibold">{{ $inventaris }} Inventaris</h2>
                        @forelse ($last_added_inventaris as $item)
                            <p class="mt-2 text-sm text-gray-500">Last added {{ $item->created_at->diffForHumans() }}</p>
                            @empty
                            <p class="mt-2 text-sm text-gray-500">Inventaris not found</p>
                        @endforelse
                    </div>
                    </div>
                </div>
                </div>
            </div>
   
        </div>                
</div>

    
    
</body>
</html>