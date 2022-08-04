  {{-- horizontal line --}}
  <div class="py-4">
    <div class="w-full border-t border-gray-800"></div>
  </div>
  {{-- horizontal line end --}}

  {{-- form container --}}
  <form action="{{ route('jadwal_kegiatan.store') }}" method="POST">
    @csrf
    <div class="flex flex-row flex-wrap justify-center mt-2">
      <div class="flex flex-col basis-4/6">
        <label class="label">
          <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Tanggal</span>
        </label>
        <label class="w-full p-2">
          <input type="date" name="tanggal" class="input input-bordered w-full">
        </label>
      </div>

      <div class="flex flex-col basis-4/6 mt-2">
        <label class="label">
          <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Waktu / jam</span>
        </label>
        <label class="w-full p-2">
          <input type="text" name="waktu" placeholder="Waktu" class="input input-bordered w-full">
        </label>
      </div>
      {{--3 input  --}}
      <div class="flex flex-row basis-4/6 mt-2">
      {{-- end of 2 input --}}
      <div class="flex flex-col basis-4/6 mt-2">
        <label class="label">
          <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Tempat</span>
        </label>
        <label class="w-full p-2">
          <input type="text" name="tempat" placeholder="Tempat" class="input input-bordered w-full">
        </label>
      </div>
      <div class="flex flex-col basis-4/6 mt-2">
        <label class="label">
          <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Acara</span>
        </label>
        <label class="w-full p-2">
          <input type="text" name="acara" placeholder="Acara" class="input input-bordered w-full">
        </label>
        <button class="btn w-20 self-end mt-5 mb-5 btn-primary">Submit</button>
      </div>
    </div>
</form>