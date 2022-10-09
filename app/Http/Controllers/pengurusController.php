<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Inventaris;
use App\Models\User;
use App\Models\Events;
use Illuminate\Http\Request;

class pengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = User::count();
        $last_user = User::orderBy('id', 'desc')->limit(1)->get(); 
        $content = Content::count();
        $last_content = Content::orderBy('id', 'desc')->limit(1)->get(); 
        $inventaris = Inventaris::count();
        $last_inventaris = Inventaris::orderBy('id', 'desc')->limit(1)->get(); 
        $upcoming_event = Events::orderBy('created_at', 'desc')->first();
        return view('pengurus.index', [
            'active' => 'dashboard',
            'user' => $user,
            'last_added_user' => $last_user,
            'content' => $content,
            'last_added_content' => $last_content,
            'inventaris' => $inventaris,
            'last_added_inventaris' => $last_inventaris,
            'upcoming_event' => $upcoming_event,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
