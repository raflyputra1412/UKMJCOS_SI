  {{-- horizontal line --}}
  <div class="py-4">
    <div class="w-full border-t border-gray-800"></div>
  </div>
  {{-- horizontal line end --}}

  {{-- form container --}}
  <form action="{{ route('data_anggota.store') }}" method="POST">

    @csrf
    <div class="flex flex-row flex-wrap justify-center mt-2">
      <div class="flex flex-col basis-4/6">
        <label class="label">
          <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Nomor Induk Mahasiswa</span>
        </label>
        <label class="w-full p-2">
          <input type="text" name="nim" placeholder="NIM" class="input input-bordered w-full">
        </label>
      </div>

      <div class="flex flex-col basis-4/6 mt-2">
        <label class="label">
          <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Nama Lengkap</span>
        </label>
        <label class="w-full p-2">
          <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="input input-bordered w-full">
        </label>
      </div>
      {{--3 input  --}}
      <div class="flex flex-row basis-4/6 mt-2">
        <div class="flex flex-col basis-1/3 mt-2">
          <label class="label">
            <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Program Studi</span>
          </label>
          <label class="w-full p-2">
            <select name="program_studi" class="select select-bordered w-full max-w-xs">
              <option selected disabled>Program Studi?</option>
              <option>S1-Sistem Komputer</option>
              <option>S1-Sistem Informasi</option>
              <option>S1-Teknologi Informasi</option>
              <option>S1-Bisnis Digital</option>
              <option>D3-Manajemen Informatika</option>
            </select>
          </label>
        </div>
        <div class="flex flex-col basis-1/3 mt-2">
          <label class="label">
            <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Angkatan</span>
          </label>
          <label class="w-full p-2">
            <input type="text" name="angkatan" placeholder="Angkatan" class="input input-bordered w-full">
          </label>
        </div>
        <div class="flex flex-col basis-1/3 mt-2">
            <label class="label">
              <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Jabatan</span>
            </label>
            <label class="w-full p-2">
              <select name="jabatan" class="select select-bordered w-full max-w-xs">
                <option selected disabled>Jabatan?</option>
                <option>Pengurus</option>
                <option>Anggota</option>
              </select>
            </label>
          </div>
      </div>
      {{-- end 3 input --}}
      {{-- 2 input --}}
      <div class="flex flex-row basis-4/6 mt-2">
        <div class="flex flex-col basis-1/2 mt-2">
          <label class="label">
            <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">No Hp</span>
          </label>
          <label class="w-full p-2">
            <input type="text" name="no_hp" placeholder="No Hp" class="input input-bordered w-full">
          </label>
        </div>
        <div class="flex flex-col basis-1/2 mt-2">
          <label class="label">
            <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Email</span>
          </label>
          <label class="w-full p-2">
            <input type="text" name="email" placeholder="Email" class="input input-bordered w-full">
          </label>
        </div>
      </div>
      {{-- end of 2 input --}}
      <div class="flex flex-col basis-4/6 mt-2">
        <label class="label">
          <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Alamat</span>
        </label>
        <label class="w-full p-2">
          <input type="text" name="alamat" placeholder="Alamat" class="input input-bordered w-full">
        </label>
      </div>
      <div class="flex flex-col basis-4/6 mt-2">
        <label class="label">
          <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Password</span>
        </label>
        <label class="w-full p-2">
          <input type="text" name="password" value="CC381" class="input input-bordered w-full" readonly>
        </label>
        <button class="btn w-20 self-end mt-5 mb-5 btn-primary">Submit</button>
      </div>
    </div>
</form>