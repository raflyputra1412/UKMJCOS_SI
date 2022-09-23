<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jenis_content;
use App\Models\User;

class Content extends Model
{
    use HasFactory;

    protected $table = 'content';
    protected $guarded = ['id'];

    public function jenis_content(){
        return $this->belongsTo(Jenis_content::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
