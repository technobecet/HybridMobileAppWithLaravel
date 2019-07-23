<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function photoable()
    {
        return $this->morphTo();
    }
}
