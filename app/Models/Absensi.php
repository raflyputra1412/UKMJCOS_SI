<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pertemuan;
use App\Models\User;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensi';

    protected $guarded = ['id'];
    
    public $timestamps = false;

    // protected $casts = [
    //     'user_id' => 'array',
    //     'nama_anggota' => 'array',
    //     'nim' => 'array',
    //     'kehadiran' => 'array',
    // ];

    public function pertemuan(){
        return $this->belongsTo(Pertemuan::class);
    }

    public function user(){
        return $this->belongsToMany(User::class);
    }
}
