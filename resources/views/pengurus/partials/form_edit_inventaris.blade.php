  {{-- horizontal line --}}
  <div class="py-4">
      <div class="w-full border-t border-gray-800"></div>
  </div>
  {{-- horizontal line end --}}

  {{-- form container --}}
  @foreach ($inventaris as $invent)
      <form action="/inventaris/{{ $invent->id }}" method="POST">
          @method('put')
          @csrf
          <div class="flex flex-row flex-wrap justify-center mt-2">
              <div class="flex flex-col basis-4/6">
                  <label class="label">
                      <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Nama
                          Barang</span>
                  </label>
                  <label class="w-full p-2">
                      <input type="text" name="nama_barang" value="{{ old('nama_barang', $invent->nama_barang) }}" placeholder="Nama Barang"
                          class="input input-bordered w-full @error('nama_barang') border-2 border-red-500 @enderror">

                      @error('nama_barang')
                          <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}
                          </span>
                      @enderror
                  </label>
              </div>

              <div class="flex flex-col basis-4/6 mt-2">
                  <label class="label">
                      <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Harga
                          Barang</span>
                  </label>
                  <label class="w-full p-2">
                      <input type="text" name="harga" value="{{ old('harga', $invent->harga) }}" placeholder="Harga Barang"
                          class="input input-bordered w-full @error('harga') border-2 border-red-500 @enderror">

                      @error('harga')
                          <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}
                          </span>
                      @enderror
                  </label>
              </div>
              {{-- 3 input --}}
              <div class="flex flex-row basis-4/6 mt-2">
                  <div class="flex flex-col basis-1/3 mt-2">
                      <label class="label">
                          <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Jumlah
                              Barang</span>
                      </label>
                      <label class="w-full p-2">
                          <input type="text" name="jumlah_barang" value="{{ old('jumlah_barang', $invent->jumlah_barang) }}" placeholder="Jumlah Barang"
                              class="input input-bordered w-full @error('jumlah_barang') border-2 border-red-500 @enderror">

                          @error('jumlah_barang')
                              <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}
                              </span>
                          @enderror

                      </label>
                  </div>
                  <div class="flex flex-col basis-1/3 mt-2">
                      <label class="label">
                          <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Sumber
                              Dana</span>
                      </label>
                      <label class="w-full p-2">
                          <input type="text" name="sumber_dana" value="{{ old('sumber_dana', $invent->sumber_dana) }}" placeholder="Sumber Dana"
                              class="input input-bordered w-full @error('sumber_dana') border-2 border-red-500 @enderror ">

                            @error('sumber_dana')
                                <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }} </span> 
                            @enderror
                      </label>
                  </div>
                  <div class="
                              flex flex-col basis-1/3 mt-2">
                          <label class="label">
                              <span
                                  class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Kepemilikan</span>
                          </label>
                          <label class="w-full p-2">
                              <input type="text" name="kepemilikan" value="{{ old('kepemilikan', $invent->kepemilikan) }}" placeholder="Kepemilikan"
                                  class="input input-bordered w-full @error('kepemilikan') border-2 border-red-500 @enderror">

                              @error('kepemilikan')
                                  <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                      {{ $message }}
                                  </span>
                              @enderror
                          </label>
                  </div>
              </div>
              {{-- end 3 input --}}
              {{-- 2 input --}}
              <div class="flex flex-row basis-4/6 mt-2">
                  <div class="flex flex-col basis-1/2 mt-2">
                      <label class="label">
                          <span
                              class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Pemegang</span>
                      </label>
                      <label class="w-full p-2">
                          <input type="text" name="pemegang" value="{{ old('pemegang', $invent->pemegang) }}" placeholder="Pemegang"
                              class="input input-bordered w-full @error('pemegang') border-2 border-red-500 @enderror">

                          @error('pemegang')
                              <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}
                              </span>
                          @enderror
                      </label>
                  </div>
                  <div class="flex flex-col basis-1/2 mt-2">
                      <label class="label">
                          <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Tanggal
                              Input</span>
                      </label>
                      <label class="w-full p-2">
                          <input type="date" name="tgl_input" value="{{ old('tgl_input', $invent->tgl_input) }}" placeholder="Tanggal Input"
                              class="input input-bordered w-full @error('tgl_input') border-2 border-red-500 @enderror">

                          @error('tgl_input')
                              <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}
                              </span>
                          @enderror
                      </label>
                  </div>
              </div>
              {{-- end of 2 input --}}
              <div class="flex flex-col basis-4/6 mt-2">
                  <button class="btn w-20 self-end mt-5 mb-5 btn-primary">Submit</button>
              </div>
          </div>
      </form>
  @endforeach
