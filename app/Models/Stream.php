<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;

class Stream extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['name', 'description', 'stream_url', 'is_active'];

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
