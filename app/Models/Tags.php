<?php

namespace App\Models;

use App\Models\Videos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tags extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['name'];

    public function videos()
    {
        return $this->belongsToMany(Videos::class);
    }
}
