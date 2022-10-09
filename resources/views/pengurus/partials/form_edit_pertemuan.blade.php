  {{-- horizontal line --}}
  <div class="py-4">
    <div class="w-full border-t border-gray-800"></div>
</div>
{{-- horizontal line end --}}

{{-- form container --}}
@foreach ($pertemuans as $pertemuan)
<form action="/absensi/{{ $pertemuan->id }}" method="POST">
    @method('put')
    @csrf
    <div class="flex flex-row flex-wrap justify-center mt-2">
        <div class="flex flex-col basis-4/6">
            <label class="label">
                <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Pekan</span>
            </label>
            <label class="w-full p-2">
                <input type="text" name="pekan" placeholder="Pekan" class="input input-bordered w-full @error('pekan') border-2 border-red-500 @enderror" value="{{ old('pekan', $pertemuan->pekan) }}">
                
                @error('pekan')
                    <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}</span>
                @enderror
            </label>
        </div>
        
        <div class="flex flex-col basis-4/6 mt-2">
            <label class="label">
                <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Tanggal</span>
            </label>
            <label class="w-full p-2">
                <input type="date" name="tanggal" placeholder="Tanggal Input" class="input input-bordered w-full @error('tanggal') border-2 border-red-500 @enderror" value="{{ old('tanggal', $pertemuan->tanggal) }}">
                
                @error('tanggal')
                    <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}</span>
                @enderror
            </label>
        </div>
        
        <div class="flex flex-col basis-4/6">
            <label class="label">
                <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Waktu</span>
            </label>
            <label class="w-full p-2">
                <input type="text" name="waktu" placeholder="Waktu" class="input input-bordered w-full @error('waktu') border-2 border-red-500 @enderror" value="{{ old('waktu', $pertemuan->waktu) }}">
                
                @error('waktu')
                    <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}</span>
                @enderror
            </label>
        </div>
        
        <div class="flex flex-col basis-4/6">
            <label class="label">
                <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Kegiatan</span>
            </label>
            <label class="w-full p-2">
                <input type="text" name="nama_kegiatan" placeholder="Kegiatan" class="input input-bordered w-full @error('nama_kegiatan') border-2 border-red-500 @enderror" value="{{ old('nama_kegiatan', $pertemuan->nama_kegiatan) }}">
                
                @error('nama_kegiatan')
                    <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}</span>
                @enderror
            </label>
        </div>
        
        <div class="flex flex-col basis-4/6 mt-2">
            <button class="btn w-20 self-end mt-5 mb-5 btn-primary">Submit</button>
        </div>
    </div>
</form>
@endforeach
