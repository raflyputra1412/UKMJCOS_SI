<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Content;

class Jenis_content extends Model
{
    use HasFactory;

    protected $table = 'jenis_content';

    protected $guarded = ['id'];

    public function content(){
        return $this->hasMany(Content::class);
    }
}
