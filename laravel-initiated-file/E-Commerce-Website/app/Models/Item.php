<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'in_stock', 'brands', 'price'];

    public function images(){

        return $this->hasMany(ItemImage::class, 'item_id');

    }

}
