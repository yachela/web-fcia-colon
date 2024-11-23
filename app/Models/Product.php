<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    protected $table = 'products';

    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn($value) => strtolower($value), 
            get: fn($value) => ucfirst($value)
        );
    }
}