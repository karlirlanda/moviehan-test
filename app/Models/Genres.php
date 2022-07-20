<?php

namespace App\Models;

use App\Models\User;
use App\Models\Videos;
use App\Models\Streams;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Genres extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['name'];


    public function streams()
    {
        return $this->belongsToMany(Streams::class);
    }

    public function videos()
    {
        return $this->belongsToMany(Videos::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Categories::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
