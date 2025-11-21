<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['upload_id'];

    public function upload()
    {
        return $this->belongsTo(Upload::class);
    }
}
