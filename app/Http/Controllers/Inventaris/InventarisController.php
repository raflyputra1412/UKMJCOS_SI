<?php

namespace App\Http\Controllers\Inventaris;

use App\Http\Controllers\Controller;
use App\Models\Inventaris;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pengurus.inventaris.index', [
            'title' => 'Inventaris',
            'active' => 'inventaris',
            'inventaris' => Inventaris::first()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('pengurus.inventaris.create', [
            'title' => 'Add Inventaris',
            'active' => 'inventaris',
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
        $rules = [
            'nama_barang' => 'required|max:100',
            'harga' => 'required',
            'jumlah_barang' => 'required',
            'sumber_dana' => 'required',
            'kepemilikan' => 'required',
            'pemegang' => 'required',
            'tgl_input' => 'required',
        ];

        $validatedData = $request->validate($rules);
        Inventaris::create($validatedData);

        return redirect('/inventaris')->with('success', 'Inventaris has been added!');
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
        return view('pengurus.inventaris.edit', [
            'title' => 'Edit Inventaris',
            'active' => 'inventaris',
            'inventaris' => Inventaris::where('id', $id)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventaris $inventaris ,$id)
    {
        $rules = [
            'nama_barang' => 'required|max:100',
            'harga' => 'required',
            'jumlah_barang' => 'required',
            'sumber_dana' => 'required',
            'kepemilikan' => 'required',
            'pemegang' => 'required',
            'tgl_input' => 'required',
        ];

        $validatedData = $request->validate($rules);
        $inventaris::find($id)->update($validatedData);
        return redirect('/inventaris')->with('success', 'Inventaris has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Inventaris::destroy($id);
        return redirect('/inventaris')->with('success', 'Invetaris berhasil dihapus');
    }
}
