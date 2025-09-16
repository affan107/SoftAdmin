<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Episode extends Model
{
      protected $guarded = [];

      public function episodeImages(): HasMany
    {
        return $this->hasMany(EpisodeImage::class);
    }


    
}
