<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TouristObject extends Model
{
    protected $table = 'objects';

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function photos()
    {
        return $this->morphMany(Photo::class, 'photoable');
    }
}
