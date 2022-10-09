<?php

namespace App\Http\Controllers\Jadwal_Kegiatan;

use App\Http\Controllers\Controller;
use App\Models\JadwalKegiatan;
use Illuminate\Http\Request;

class JadwalKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pengurus.jadwal_kegiatan.index', [
            'title' => 'Jadwal Kegiatan',
            'active' => 'jadwal_kegiatan',
            'jadwals' => JadwalKegiatan::orderBy('id', 'asc')->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengurus.jadwal_kegiatan.create', [
            'active' => 'jadwal_kegiatan',
            'title' => 'Jadwal Kegiatan', 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'acara' => 'required',
        ]);
        
        JadwalKegiatan::create($validatedData);
        // return dd($validatedData);
        return redirect('/jadwal_kegiatan')->with('success', 'Jadwal Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwals = JadwalKegiatan::where('id', $id)->get();

        return view('pengurus.jadwal_kegiatan.edit', [
            'active' => 'jadwal_kegiatan',
            'title' => 'Jadwal Kegiatan',
            'jadwals' => $jadwals,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JadwalKegiatan $jadwalkegiatan , $id)
    {
        // rules untuk validasi
        $rules = [
            'tanggal' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'acara' => 'required',
        ];

        $validatedData = $request->validate($rules);
        $jadwalkegiatan::find($id)->update($validatedData);

        return redirect('/jadwal_kegiatan')->with('success', 'Jadwal Berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JadwalKegiatan::destroy($id);
        return redirect('/jadwal_kegiatan')->with('success', 'Jadwal telah berhasil dihapus');
    }
}
