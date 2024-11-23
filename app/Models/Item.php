<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Item extends Model
{
    use HasFactory;
    protected function title(): Attribute { 
        
        return Attribute::make(
            set: function($value){
                return strtolower($value);
            }, 
            get: function($value){
                return ucfirst($value);
            }
        );

}
}
