<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table = "tb_album"; 
    protected $primaryKey = 'album_id'; 
    protected $fillable = ['artist_id', 'album_name'];
}
