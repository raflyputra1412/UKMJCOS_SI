  {{-- horizontal line --}}
  <div class="py-4">
      <div class="w-full border-t border-gray-800"></div>
  </div>
  {{-- horizontal line end --}}

  {{-- form container --}}
  @foreach ($jadwals as $jadwal)
      <form action="/jadwal_kegiatan/{{ $jadwal->id }}" method="POST">
          @method('put')
          @csrf
          <div class="flex flex-row flex-wrap justify-center mt-2">
              <div class="flex flex-col basis-4/6">
                  <label class="label">
                      <span
                          class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Tanggal</span>
                  </label>
                  <label class="w-full p-2">
                      <input type="date" name="tanggal"
                          class="input input-bordered w-full @error('tanggal') border-2 border-red-500 @enderror"
                          value="{{ old('tanggal', $jadwal->tanggal) }}">
                      @error('tanggal')
                          <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}
                          </span>
                      @enderror
                  </label>
              </div>

              <div class="flex flex-col basis-4/6 mt-2">
                  <label class="label">
                      <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Waktu /
                          jam</span>
                  </label>
                  <label class="w-full p-2">
                      <input type="text" name="waktu" placeholder="Waktu"
                          class="input input-bordered w-full @error('waktu') border-2 border-red-500 @enderror"
                          value="{{ old('waktu', $jadwal->waktu) }}">

                      @error('waktu')
                          <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}
                          </span>
                      @enderror
                  </label>
              </div>
              {{-- 3 input --}}
              <div class="flex flex-row basis-4/6 mt-2">
                  {{-- end of 2 input --}}
                  <div class="flex flex-col basis-4/6 mt-2">
                      <label class="label">
                          <span
                              class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Tempat</span>
                      </label>
                      <label class="w-full p-2">
                          <input type="text" name="tempat" placeholder="Tempat"
                              class="input input-bordered w-full @error('tempat') border-2 border-red-500 @enderror"
                              value="{{ old('tempat', $jadwal->tempat) }}">

                          @error('tempat')
                              <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}
                              </span>
                          @enderror
                      </label>
                  </div>
                  <div class="flex flex-col basis-4/6 mt-2">
                      <label class="label">
                          <span
                              class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Acara</span>
                      </label>
                      <label class="w-full p-2">
                          <input type="text" name="acara" placeholder="Acara"
                              class="input input-bordered w-full @error('acara')  @enderror"
                              value="{{ old('acara', $jadwal->acara) }}">

                          @error('acara')
                              <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}
                              </span>
                          @enderror
                      </label>
                      <button class="btn w-20 self-end mt-5 mb-5 btn-primary">Submit</button>
                  </div>
              </div>
      </form>
  @endforeach
