<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'logo', 'country'];

    public function dresses()  {
        return $this->hasMany(Dress::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'brand_category');
    }
}