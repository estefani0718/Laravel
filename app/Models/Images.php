<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    public function products(){

        return $this->hasOne(Product::class);
    }
      public function productImage()
    {
        return $this->hasOneThrough(Product::class, Category::class);
    }

    public function imageable()
    {
       return $this->morphTo();
    }
    
}

