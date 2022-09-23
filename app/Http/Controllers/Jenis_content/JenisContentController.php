<?php

namespace App\Http\Controllers\Jenis_content;

use App\Http\Controllers\Controller;
use App\Models\Jenis_content;
use Illuminate\Http\Request;

class JenisContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $nomor = 1;
        $jenis_content = Jenis_content::orderBy('id', 'asc')->paginate(5);
        return view('pengurus.jenis_content.index', [
            'title' => 'jenis Content',
            'active' => 'content',
            'jenis_content' => $jenis_content,
            // 'nomor' => $nomor,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengurus.jenis_content.create', [
            'title' => 'Add Jenis Content',
            'active' => 'content',
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
            'nama_jenis' => 'required|max:100',
        ];

        $validatedData = $request->validate($rules);

        Jenis_content::create($validatedData);

        return redirect('/jenis_content')->with('success', 'Jenis Content berhasil ditambahkan!');

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
        return view('pengurus.jenis_content.edit', [
            'title' => 'Edit Jenis Content',
            'active' => 'content',
            'jenis_content' => Jenis_content::where('id', $id)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'nama_jenis' => 'required',
        ];

        $validatedData = $request->validate($rules);

        Jenis_content::find($id)->update($validatedData);

        return redirect('/jenis_content');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jenis_content::destroy($id);
        return redirect('/jenis_content')->with('success', 'Jenis Content berhasil dihapus');
    }
}
