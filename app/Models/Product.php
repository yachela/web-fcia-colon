<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

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
        'slug',
    ];


    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn($value) => strtolower($value),
            get: fn($value) => ucfirst($value)
        );
    }


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = Str::slug($product->name);
        });
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }
}
