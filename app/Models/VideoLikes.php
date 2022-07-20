<?php

namespace App\Models;

use App\Models\Videos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VideoLikes extends Model
{
    use HasFactory;

    public function videos()
    {
        return $this->belongsTo(Videos::class, 'video_likes');
    }
}
