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

    public function users()
    {
        return $this->morphToMany(User::class, 'likeable');
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'object_id');
    }

    public function rooms()
    {
        return $this->hasMany(Room::class, 'object_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function articles()
    {
        return $this->hasMany(Article::class, 'object_id');
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('name', 'asc');
    }

}
