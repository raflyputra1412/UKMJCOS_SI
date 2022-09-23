<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $table = 'events';

    // protected $guarded = ['id'];
    protected $casts = ['roles_panitia' => 'array'];
    
    protected $fillable = [
        'nama_event',
        'tanggal',
        'waktu',
        'ketua_event',
        'roles_panitia',
    ];   
}
