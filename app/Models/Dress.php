<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'image', 'size', 'purchase_date', 'type', 'brand_id', 'season', 'color', 'user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function outfits()
    {
        return $this->belongsToMany(Outfit::class, 'outfit_dress', 'dress_id', 'outfit_id');
    }
}
