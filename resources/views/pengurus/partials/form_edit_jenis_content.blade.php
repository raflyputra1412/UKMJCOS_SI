  {{-- horizontal line --}}
  <div class="py-4">
    <div class="w-full border-t border-gray-800"></div>
</div>
{{-- horizontal line end --}}

{{-- form container --}}
@foreach ($jenis_content as $jenis)
    <form action="/jenis_content/{{ $jenis->id }}" method="POST">
        @method('put')
        @csrf
        <div class="flex flex-row flex-wrap justify-center mt-2">
            <div class="flex flex-col basis-4/6">
                <label class="label">
                    <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Nama Jenis Content</span>
                </label>
                <label class="w-full p-2">
                    <input type="text" name="nama_jenis" value="{{ old('nama_jenis', $jenis->nama_jenis) }}" placeholder="Nama Jenis Content" class="input input-bordered w-full @error('nama_jenis') border-2 border-red-500 @enderror">

                    @error('nama_jenis')
                        <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}
                        </span>
                    @enderror
                </label>
            </div>

        </div>
            {{-- end of 2 input --}}
            <div class="flex flex-col mt-2 ml-10 w-4/5">
                <button class="btn w-20 self-end mt-5 mb-5 btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endforeach
