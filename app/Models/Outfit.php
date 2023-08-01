<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outfit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'occasion', 'season'
    ];

    public function dresses()
    {
        return $this->belongsToMany(Dress::class, 'outfit_dress', 'outfit_id', 'dress_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
