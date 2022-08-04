   {{-- horizontal line --}}
   <div class="py-4">
       <div class="w-full border-t border-gray-800"></div>
   </div>
   {{-- horizontal line end --}}

   {{-- form container --}}
   @foreach ($users as $user)
       <form action="/data_anggota/{{ $user->id }}" method="POST">
        
           @method('put')
           @csrf
           <div class="flex flex-row flex-wrap justify-center mt-2">
               <div class="flex flex-col basis-4/6">
                   <label class="label">
                       <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Nomor
                           Induk Mahasiswa</span>
                   </label>
                   <label class="w-full p-2">
                       <input type="text" name="nim" value="{{ old('nim', $user->nim) }}"
                           class="input input-bordered w-full text-white @error('nim') border-2 border-red-500 @enderror">

                       @error('nim')
                           <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}
                           </span>
                       @enderror
                   </label>
               </div>

               <div class="flex flex-col basis-4/6 mt-2">
                   <label class="label">
                       <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Nama
                           Lengkap</span>
                   </label>
                   <label class="w-full p-2">
                       <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $user->nama_lengkap) }}"
                           class="input input-bordered w-full text-white @error('nama_lengkap') border-2 border-red-500 @enderror">

                       @error('nama_lengkap')
                           <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}
                           </span>
                       @enderror
                   </label>
               </div>
               {{-- 3 input --}}
               <div class="flex flex-row basis-4/6 mt-2">
                   <div class="flex flex-col basis-1/3 mt-2">
                       <label class="label">
                           <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Program
                               Studi</span>
                       </label>
                       <label class="w-full p-2">
                           <select name="program_studi"
                               class="select select-bordered w-full max-w-xs @error('program_studi') border-2 border-red-500 @enderror">
                               <option selected disabled>{{ old('program_studi', $user->program_studi) }}</option>
                               <option>S1-Sistem Komputer</option>
                               <option>S1-Sistem Informasi</option>
                               <option>S1-Teknologi Informasi</option>
                               <option>S1-Bisnis Digital</option>
                               <option>D3-Manajemen Informatika</option>
                           </select>
                           @error('program_studi')
                               <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                   {{ $message }}
                               </span>
                           @enderror
                       </label>
                   </div>
                   <div class="flex flex-col basis-1/3 mt-2">
                       <label class="label">
                           <span
                               class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Angkatan</span>
                       </label>
                       <label class="w-full p-2">
                           <input type="text" name="angkatan" value="{{ old('angkatan', $user->angkatan) }}"
                               class="input input-bordered w-full @error('angkatan') border-2 border-red-500 @enderror">
                           @error('angkatan')
                               <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                   {{ $message }}
                               </span>
                           @enderror
                       </label>
                   </div>
                   <div class="flex flex-col basis-1/3 mt-2">
                       <label class="label">
                           <span
                               class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Jabatan</span>
                       </label>
                       <label class="w-full p-2">
                           <select name="jabatan"
                               class="select select-bordered w-full max-w-xs @error('jabatan') border-2 border-red-500 @enderror">
                               <option selected disabled>{{ old('jabatan', $user->jabatan) }}</option>
                               <option>Pengurus</option>
                               <option>Anggota</option>
                           </select>
                           @error('jabatan')
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
                           <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">No
                               Hp</span>
                       </label>
                       <label class="w-full p-2">
                           <input type="text" name="no_hp" value="{{ old('no_hp', $user->no_hp) }}"
                               class="input input-bordered w-full @error('no_hp') border-2 border-red-500 @enderror">
                           @error('no_hp')
                               <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                   {{ $message }}
                               </span>
                           @enderror
                       </label>
                   </div>
                   <div class="flex flex-col basis-1/2 mt-2">
                       <label class="label">
                           <span
                               class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Email</span>
                       </label>
                       <label class="w-full p-2">
                           <input type="text" name="email" value="{{ old('email', $user->email) }}"
                               class="input input-bordered w-full @error('email') border-2 border-red-500 @enderror">
                           @error('email')
                               <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                   {{ $message }}
                               </span>
                           @enderror

                       </label>
                   </div>
               </div>
               {{-- end of 2 input --}}
               <div class="flex flex-col basis-4/6 mt-2">
                   <label class="label">
                       <span
                           class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Alamat</span>
                   </label>
                   <label class="w-full p-2">
                       <input type="text" name="alamat" value="{{ old('alamat', $user->alamat) }}"
                           class="input input-bordered w-full @error('alamat') border-2 border-red-500 @enderror">
                       @error('alamat')
                           <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                               {{ $message }}
                           </span>
                       @enderror

                   </label>
               </div>
               <div class="flex flex-col basis-4/6 mt-2">
                   <button class="btn w-20 self-end mt-5 mb-5 btn-primary">Submit</button>
               </div>
           </div>
       </form>
   @endforeach
