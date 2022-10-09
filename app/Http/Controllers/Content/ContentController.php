<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Jenis_content;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Content::orderBy('id', 'asc')->paginate(6);
        
        return view('pengurus.content.index', [
            'title' => 'Content',
            'active' => 'content',
            'contents' => $contents,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $jenis_content = Jenis_content::all();
        $user = Auth::user();
        return view('pengurus.content.create', [
            'title' => 'Add Content',
            'active' => 'content',
            'user' => $user,
            'jenis_content' => $jenis_content,
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
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:jpg,png,jpeg|max:10000',
            'user_id' => 'required',
            'jenis_content_id' => 'required'
        ]);
    
        $NamaGambar = time().'.'.$request->gambar->extension();  
   
        $request->gambar->move(public_path('image/content'), $NamaGambar);
   
        $content = new Content;
 
        $content->judul = $request->judul;
        $content->ringkasan = $request->ringkasan;
        $content->deskripsi = $request->deskripsi;
        $content->gambar = $NamaGambar;
        $content->user_id = Auth::id();
        $content->jenis_content_id = $request->jenis_content_id;
 
        $content->save();

        return redirect('/content')->with('success', 'Content berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = Content::where('id', $id)->get();
        return view('pengurus.content.show', [
            'title' => 'Content',
            'active' => 'content',
            'contents' => $content,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $jenis_content = Jenis_content::all();
        $user = Auth::user();
        return view('pengurus.content.edit', [
            'title' => 'Content',
            'active' => 'content',
            'contents' => Content::where('id', $id)->get(),
            'user' => $user,
            'jenis_content' => $jenis_content,
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
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:jpg,png,jpeg|max:10000',
            'user_id' => 'required',
            'jenis_content_id' => 'required'
        ]);
        
        $content = Content::find($id);
        if($request->has('gambar')){
            $path = "image/content/";
            File::delete($path . $content->gambar);

            $NamaGambar = time().'.'.$request->gambar->extension();

            $request->gambar->move(public_path('image/content'), $NamaGambar);

            $content->gambar = $NamaGambar;

            $content->save();
        }

        $content->judul = $request->judul;
        $content->ringkasan = $request->ringkasan;
        $content->deskripsi = $request->deskripsi;
        $content->user_id = Auth::id();
        $content->jenis_content_id = $request->jenis_content_id;
 
        $content->save();

        return redirect('/content')->with('success', 'Content berhasil diedit!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Content::find($id);

        $path = "image/content";
        File::delete($path . $content->gambar);

        $content->delete();
        return redirect('/content')->with('success', 'Content berhasil dihapus!');
    }
}
