<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Absensi;

class Pertemuan extends Model
{
    use HasFactory;
    protected $table = 'pertemuan';

    protected $guarded = ['id'];

    public function absensi(){
        return $this->hasOne(Absensi::class);
    }
}
