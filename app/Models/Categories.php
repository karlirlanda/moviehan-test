<?php

namespace App\Models;

use App\Models\User;
use App\Models\Videos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['name'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function videos()
    {
        return $this->belongsToMany(Videos::class);
    }
}
