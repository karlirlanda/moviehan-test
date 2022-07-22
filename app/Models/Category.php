<?php

namespace App\Models;

use App\Models\User;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['name'];

    public function users()
    {
        $this->belongsToMany(User::class);
    }

    public function genres()
    {
        $this->belongsToMany(Genre::class);
    }
}
