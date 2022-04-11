<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;

class Product extends Model
{
    use HasFactory;

    protected $fillable  = ['name','discount','stock','detail','price'];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
