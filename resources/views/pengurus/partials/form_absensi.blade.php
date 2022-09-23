  {{-- horizontal line --}}
<div class="py-4">
    <div class="w-full border-t border-gray-800"></div>
</div>
{{-- horizontal line end --}}

{{-- form container --}}

<table class="table table-compact w-5/6 ml-16 mt-5">
    <thead>
        <tr>
            <th>Pekan</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Nama Kegiatan</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody> 
        <tr class="hover hover:cursor-pointer">
            <td>{{ $pertemuan->pekan }}</td>
            <td>{{ $pertemuan->tanggal }}</td>
            <td>{{ $pertemuan->waktu}}</td>
            <td>{{ $pertemuan->nama_kegiatan }}</td>
            <td><a href="/absensi/{{ $pertemuan->id }}/edit"
                class="btn btn-primary btn-xs text-white"> Edit </a></td>
        </tr>
    </tbody>
</table>

<form action="/form_absen/store" method="POST">
    @csrf
    <table class="table table-compact w-5/6 ml-16 mt-10">
        <thead>
            <tr>
                <th>No</th>   
                <th>Nama Lengkap</th>
                <th>NIM</th>
                <th class="text-center">Kehadiran</th>
            </tr>
        </thead>
        <tbody>

            @php $absens = []; @endphp
            @foreach ($absensi as $item)
                @php $absens[$item->user_id] = array(
                    'id' =>  $item->id,
                    'user_id' => $item->user_id,
                    'pertemuan_id' => $item->pertemuan_id,
                    'nama_anggota' => $item->nama_anggota,
                    'nim' =>  $item->nim,
                    'kehadiran' => $item->kehadiran,
                ) @endphp
            @endforeach
    
            @foreach ($users as $user)
                
                <tr class="hover hover:cursor-pointer">
                    <td>{{ $nomor++ }}</td>
                    <td hidden>{{ $user->id }}</td>
                        <input type="text" value="{{ $user->id }}" name="user_id[{{$user->id}}]" hidden/>
                    <td hidden>{{ $pertemuan->id }}</td>
                        <input type="text" value="{{ $pertemuan->id }}" name="pertemuan_id" hidden/>
                    <td>{{ $user->nama_lengkap }}</td>
                        <input type="text" value="{{ $user->nama_lengkap }}" name="nama_anggota[{{$user->id}}]" hidden/>
                    <td>{{ $user->nim }}</td>
                        <input type="text" value="{{ $user->nim }}" name="nim[{{$user->id}}]" hidden/>
                   
                    {{ $checked = isset($absens[$user->id]['kehadiran']) && 'hadir' === $absens[$user->id]['kehadiran'] ? 'checked' : '' }}    
                    <td class="text-center">
                        <input type="checkbox" value="hadir" name="kehadiran[{{$user->id}}]" class="checkbox checkbox-primary" {{ $checked }}/>
                    </td>
                    <input type="text" value="{{ json_encode($absens, true) }}" name="databsen" hidden/>   
                </tr>
            @endforeach    

        </tbody>
    </table>
        <div class="flex justify-end mt-2 ml-11 w-5/6">
            <button class="btn w-20 self-end mt-5 mb-5 btn-primary">Submit</button>
        </div>
    </div>
</form>