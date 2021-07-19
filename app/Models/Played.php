<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Played extends Model
{
    use HasFactory;

    protected $table = "tb_played"; 
    protected $primaryKey = 'played_id'; 
    protected $fillable = ['artist_id', 'album_id', 'track_id', 'played'];
}
