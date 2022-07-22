<?php

namespace App\Models;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
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
        return $this->belongsToMany(Tag::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
    
}