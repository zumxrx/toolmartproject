<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;

    // Define which fields can be mass-assigned
    protected $fillable = [
 'title',
        'description',
        'rental_price',
        'condition',
        'availability',
        'category',
        'quantity',
        'image',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}