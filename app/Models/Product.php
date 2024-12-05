<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'category_id',
        'price',
        'stock',
        'image_url',
        'is_prescription',
        'expiration_date',
        'manufacturer',
    ];


    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn($value) => strtolower($value), 
            get: fn($value) => ucfirst($value)
        );
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
