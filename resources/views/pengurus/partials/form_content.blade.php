  {{-- horizontal line --}}
  <div class="py-4">
      <div class="w-full border-t border-gray-800"></div>
  </div>
  {{-- horizontal line end --}}

  {{-- form container --}}
  <form action="{{ route('content.store') }}" method="POST" class="ml-20" enctype="multipart/form-data">
      @csrf
          {{-- end of 2 input --}}
        <div class="flex flex-col basis-5/6 w-5/6 ">
            <label class="label">
                <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Judul</span>
            </label>
            <label class="w-full p-2">
                <input type="text" name="judul" placeholder="Judul" class="input input-bordered w-full" required>
            </label>
        </div>
        <div class="flex flex-col basis-5/6 w-5/6">
            <label class="label">
                <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Ringkasan</span>
            </label>
            <label class="w-full p-2">
                <textarea class="textarea textarea-bordered w-full" placeholder="Ringkasan" name="ringkasan" required></textarea>
            </label>
        </div>

        <div class="flex flex-col basis-4/6 mt-2 ml-2 w-5/6">
            <div>
                <label class="label">
                    <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold">Deskripsi</span>
                </label>
                <textarea class="ckeditor" name="deskripsi" required>{{old('deskripsi')}}</textarea>
              </div>
              <div>
                <label class="label">
                    <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold">Gambar</span>
                </label>
                <input type="file" name="gambar" class="border-2 w-5/6 text-black" required>    
            </div>
        </div>
        <div class="flex flex-col basis-5/6 mt-5 w-5/6">
            <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-2">Jenis Content</span>
            <select name="jenis_content_id" class="select select-bordered mt-4 ml-2" required>
                <option disabled selected> -- Pilih Jenis Content --</option>
                @forelse ($jenis_content as $jenis)
                    <option value="{{ $jenis->id }}">{{ $jenis->nama_jenis }}</option>
                @empty
                    <option value="">Jenis Content tidak ditemukan!</option>
                @endforelse
            </select>
        </div>

        <div class="flex flex-col basis-5/6 w-5/6 mt-5">
            <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-2">Penulis</span>
            <select name="user_id" class="select select-bordered ml-2" required>
                <option value="{{ $user->id }}">{{ $user->nama_lengkap}}</option>
            </select>
        </div>

        <div class="w-5/6 flex flex-row justify-end">
            <button class="justify btn w-20 mt-5 mb-5 btn-primary">Submit</button>
        </div>
  </form>

@push('scripts')
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('.ckeditor').ckeditor();
        });
    </script>
@endpush