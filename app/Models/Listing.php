<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'price',
        'address',
        'bathrooms',
        'bedrooms'
    ];

    public function tags()
    {
        return $this->belongsToMany((Tag::class));
    }
}
