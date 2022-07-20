<?php

namespace App\Models;

use App\Models\User;
use App\Models\Genres;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserPreferences extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_preferences');
    }

    public function genres()
    {
        return $this->belongsTomany(Genres::class, 'user_preferences');
    }

    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'user_preferences');
    }
}
