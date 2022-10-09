<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Registration</title>
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }
        
        /* Firefox */
        input[type=number] {
          -moz-appearance: textfield;
        }
        </style>
</head>
<body>
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <div class="container max-w-screen-lg mx-auto">
          <div>
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
              <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                <div class="text-gray-600">
                  <p class="font-medium text-lg">Registration</p>
                  <p>Please fill out all the fields.</p>
                </div>
      
                <div class="lg:col-span-2">
                  <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                    <div class="md:col-span-5">
                        <label for="full_name">Nomor Induk Mahasiswa</label>
                        <input type="number" name="nim" id="nim" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('nim') }}" />
                        @error('nim')
                          <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}</span>
                      @enderror
                      </div>
                    
                    <div class="md:col-span-5">
                      <label for="nama_lengkap">Nama Lengkap</label>
                      <input type="text" name="nama_lengkap" id="nama_lengkap" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('nama_lengkap') }}" />
                      @error('nama_lengkap')
            <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}</span>
          @enderror
                    </div>
                    

                    <div class="md:col-span-5">
                      <label for="program_studi">Progam Studi</label>
                      <select name="program_studi" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                        <option selected disabled>Pilih Program Studi</option>
                        <option>S1-Sistem Komputer</option>
                        <option>S1-Sistem Informasi</option>
                        <option>S1-Teknologi Informasi</option>
                        <option>S1-Bisnis Digital</option>
                        <option>D3-Manajemen Informatika</option>
                      </select>

                      @error('program_studi')
            <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}</span>
          @enderror
                    </div>
                    
                    <div class="md:col-span-3">
                      <label for="angkatan">Angkatan</label>
                      <input type="number" name="angkatan" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('angkatan') }}" placeholder="" />
                      @error('angkatan')
                      <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}</span>
                    @enderror
                    </div>
      
                    <div hidden>
                      <input type="text" name="jabatan" id="jabatan" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="Anggota" placeholder="" />
                    </div>
      
                    <div class="md:col-span-2">
                      <label for="no_hp">No Hp / Telepon</label>
                      <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                        <input type="text" name="no_hp" id="no_hp" placeholder="123-456-678-910" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="{{ old('no_hp') }}" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}" />
                      </div>
                      @error('no_hp')
              <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}</span>
            @enderror
                    </div>
                    
                    <div class="md:col-span-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('email') }}" placeholder="" />
                        
            @error('email')
            <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}</span>
          @enderror
                      </div>

                    <div class="md:col-span-2">
                      <label for="alamat">Alamat</label>
                      <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                        <input type="text" name="alamat" id="alamat" placeholder="" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                      </div>
                      @error('alamat')
                      <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}</span>
                    @enderror
                    </div>

                    <div class="md:col-span-5">
                      <label for="password">Password</label>
                      <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                        <input type="password" name="password" id="password" placeholder="" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" onkeyup='check();'/>
                      </div>
                    </div>

                    <div class="md:col-span-5">
                      <label for="confirm_password">Confirm Password</label>
                      <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                        <input type="password" id="confirm_password" placeholder="" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" onkeyup='check();'/>
                        <span id='message' class="text-xs"></span>
                      </div>
                    </div>
            
                    <div class="md:col-span-5 text-right">
                      <div class="inline-flex items-end">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </form>
      </div>

<script>
var check = function() {
    if (document.getElementById('password').value == document.getElementById('confirm_password').value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Matching';
    }
    else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}        
</script>
</body>
</html>