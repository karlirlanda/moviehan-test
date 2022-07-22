<?php

namespace App\Models;

use App\Models\Genre;
use App\Models\Video;
use App\Models\Category;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'last_login_ip',
        'last_login_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }


    public function streams()
    {
        return $this->hasMany(Stream::class);
    }


    public function likes()
    {
        return $this->belongsTo(Video::class, 'video_likes', 'user_id', 'video_id');
    }


    public function last_watch_stream()
    {
        return $this->belongsToMany(Stream::class, 'last_watched_streams', 'user_id', 'stream_id');
    }


    public function last_watch_video()
    {
        return $this->belongsToMany(Video::class, 'last_watched_videos', 'user_id', 'video_id');
    }


    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }


    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
