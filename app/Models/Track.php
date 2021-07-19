<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;

    protected $table = "tb_track"; 
    protected $primaryKey = 'track_id'; 
    protected $fillable = ['track_name', 'artist_id', 'album_id', 'waktu'];
}
