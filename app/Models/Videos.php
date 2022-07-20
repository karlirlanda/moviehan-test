<?php

namespace App\Models;

use App\Models\Tags;
use App\Models\User;
use App\Models\Genres;
use App\Models\Categories;
use App\Models\VideoLikes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Videos extends Model
{
    use HasFactory;

    protected $casts = [
        'genres' => 'array',
        'tags' => 'array'
    ];

    protected $guarded = [];

    protected $fillable = ['category_id', 'thumbnail', 'title', 'video', 'duration', 'year_released'];

    public function getVideoUrl()
    {
        return 'video_url';
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genres::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->belongsToMany(VideoLikes::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Categories::class);
    }
}
