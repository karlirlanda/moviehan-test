<?php

namespace App\Models;

use App\Models\Genres;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Streams extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['name', 'description', 'stream_url', 'is_active'];

    public function genres()
    {
        return $this->hasMany(Genres::class);
    }
}
