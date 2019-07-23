<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function photos()
    {
        return $this->morphMany(Photo::class, 'photoable');
    }
}
