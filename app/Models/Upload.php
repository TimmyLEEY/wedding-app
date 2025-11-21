<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $fillable = [
        'guest_name',
        'caption',
        'file_path',
        'file_type',
    ];

    // Relationship: one upload can have many comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

      public function likes()
    {
        return $this->hasMany(Like::class);
    }

    // Optional: Count likes
    public function getLikesCountAttribute()
    {
        return $this->likes()->count();
    }
}
