<?php

namespace App\Models;

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Genre extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['name'];

    public function users()
    {
        $this->belongsToMany(User::class);
    }

    public function categories()
    {
        $this->belongsToMany(Category::class);
    }
}
