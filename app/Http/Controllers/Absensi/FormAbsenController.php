<?php

namespace App\Http\Controllers\Absensi;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\User;
use App\Models\Pertemuan;
use Illuminate\Http\Request;

class FormAbsenController extends Controller
{
    public function create(Request $request){
        $nomor = 1;
        $users = User::orderBy('nim', 'ASC')->get();
        
        $pertemuan = Pertemuan::where('id',  $request->query('pertemuan'))->first();

        $databsen = Absensi::where('pertemuan_id',  $request->query('pertemuan'))->get();

        return view('pengurus.absensi_pertemuan.form_absensi', [
            'pertemuan' => $pertemuan,
            'users' => $users,
            'nomor' => $nomor,
            'title' => 'Add Absensi',
            'active' => 'absensi',
            'absensi' => $databsen,
        ]);
    }

    public function store(Request $request, Absensi $absensi){
            
        $request->validate([
            'user_id' => 'required',
            'pertemuan_id' => 'required',
            'nama_anggota' => 'required',
            'nim' => 'required',
            'kehadiran' => 'nullable',
        ]);

        
        $user_id = $request->user_id;

        $databsen = $request->databsen;
       
        $decoded_absen = json_decode($databsen, true);
    
        foreach ($user_id as $index => $id) {
                    
            $absensi = new Absensi;

            if(isset( $decoded_absen[$id]  ) ){

                error_log('atas');
                $absensi->where([
                    ['user_id',  (int) $id],
                    ['pertemuan_id', $request->pertemuan_id]
                ])->update([
                    'kehadiran' => isset($request->kehadiran[$index]) ? $request->kehadiran[$index] : 'tidak hadir',
                ]);
            } else {
                error_log('bawah');
                $absensi->user_id = (int) $id;
                $absensi->pertemuan_id = $request->pertemuan_id;
                $absensi->nama_anggota = $request->nama_anggota[$index];
                $absensi->nim = $request->nim[$index];
                $absensi->kehadiran = isset($request->kehadiran[$index]) ? $request->kehadiran[$index] : 'tidak hadir';
                $absensi->save();
            }
        } 

        return redirect('/absensi');
    }

    
}
