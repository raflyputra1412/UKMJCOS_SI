<?php

namespace App\Http\Controllers\Data_Anggota;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DataAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pengurus.data_anggota.index', [
            'title' => 'Data Anggota',
            'active' => 'data_anggota',
            'users' => User::orderBy('nim', 'asc')->paginate(3),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengurus.data_anggota.create', [
            'active' => 'data_anggota',
            'title' => 'Add Anggota',
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
            'nim' => 'required|max:9',
            'nama_lengkap' => 'required|max:50',
            'program_studi' => 'required',
            'angkatan' => 'required|max:4',
            'jabatan' => 'required',
            'no_hp' => 'required|max:12',
            'email' => 'required|email:dns',
            'alamat' => 'required',
            'password' => 'required|min:5|max:12',
         ]);

         $validatedData['password'] = Hash::make($validatedData['password']);
         User::create($validatedData);

         return redirect('/data_anggota')->with('success', 'User has been successfully added!');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::where('id', $id)->get();

        return view('pengurus.data_anggota.edit', [
            'users' => $users,
            'active' => 'data_anggota',
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, $id)
    {
         // validasi
         $rules = [
            'nim' => 'required|max:9',
            'nama_lengkap' => 'required|max:50',
            'program_studi' => 'nullable',
            'angkatan' => 'required|max:4',
            'jabatan' => 'nullable',
            'no_hp' => 'required|max:12',
            'email' => 'required|email:dns',
            'alamat' => 'required',
        ];
        $validatedData = $request->validate($rules);
        // updates
        $user::find($id)->update($validatedData);

        return redirect('/data_anggota')->with('success', 'User has been updated!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/data_anggota')->with('success', 'User has been deleted!');
    }
}