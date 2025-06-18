<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
    // public function images()
    // {
    //     return $this->hasOne('Image');
    // }

    public function category(){

        return $this->belongsTo(Category::class);
    }
    
    public function images()
    {
        return $this->morphMany(Images::class, 'imageable');
    }
}
