<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {
    //    dd($request);
       $validatedData = $request->validate([
        'nim' => 'required|max:9',
        'nama_lengkap' => 'required|max:50',
        'program_studi' => 'required',
        'angkatan' => 'required|max:4',
        'jabatan' => 'required',
        'no_hp' => 'required|max:16',
        'email' => 'required|email:dns',
        'alamat' => 'required',
        'password' => 'required|min:5|max:12',
     ]); 

     $validatedData['password'] = Hash::make($validatedData['password']);
         User::create($validatedData);

         return redirect('/login')->with('success', 'User has been successfully added!');
    }
}
