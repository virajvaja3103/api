<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Model\Product;

class Review extends Model
{
    use HasFactory;

    protected $fillable  = ['customer','review','star'];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
