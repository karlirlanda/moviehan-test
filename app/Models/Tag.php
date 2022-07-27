<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Video;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['name'];

    public function videos()
    {
        return $this->belongsToMany(Video::class);
    }
}
