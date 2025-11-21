<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'upload_id',
        'guest_name',
        'content',
    ];

    // Relationship: a comment belongs to an upload
    public function upload()
    {
        return $this->belongsTo(Upload::class);
    }
}
