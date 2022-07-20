<?php

namespace App\Models;

use App\Models\User;
use App\Models\Genres;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LastWatched extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class, 'last_watcheds');
    }

    public function videos()
    {
        return $this->belongsTomany(Genres::class, 'last_watcheds');
    }

    public function streams()
    {
        return $this->belongsToMany(Categories::class, 'last_watcheds');
    }
}
