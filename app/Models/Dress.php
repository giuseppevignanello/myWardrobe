<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'image', 'size', 'purchase_date', 'type', 'brand', 'season', 'color', 'user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
