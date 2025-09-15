<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
      protected $fillable = [
        "title",
        'images',
        "episode_no",
        "yt_link",
        "type",
        "description",
        "quotes",
        "duration",
        "status",
        
    ];


    
}
