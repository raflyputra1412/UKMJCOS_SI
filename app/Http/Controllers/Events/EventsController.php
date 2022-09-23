<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Events $events)
    {
        // dd(json_decode($event->get()));

        return view('pengurus.events.index', [
            'active' => 'events',
            'title' => 'Events',
            'events' => $events->all(),
            // 'roles' => json_decode($events->get()[0]->roles_panitia),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengurus.events.create', [
            'title' => 'Tambah Event',
            'active' => 'events',
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
            'nama_event' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'ketua_event' => 'required',
            'roles_panitia' => 'required',
        ];

        $validatedData = $request->validate($rules);
        Events::create($validatedData);        

        return redirect('/events')->with('success', 'event has been added!');

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
        $get_roles = json_encode(Events::where('id', $id)->get()[0]->roles_panitia); 
        return view('pengurus.events.edit', [
            'title' => 'Detail Event',
            'active' => 'events',
            'events' => Events::where('id', $id)->get(),
            'roles' => json_decode($get_roles, TRUE),
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
            'nama_event' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'ketua_event' => 'required',
            'roles_panitia' => 'required',
        ];


        $validatedData = $request->validate($rules);

        Events::find($id)->update($validatedData);

        return redirect('/events')->with('success', 'event has been edited!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Events::destroy($id);
        return redirect('/events')->with('success', 'Event berhasil dihapus');
    }
}
