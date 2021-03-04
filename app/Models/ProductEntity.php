<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductPrice;

class ProductEntity extends Model
{
    use HasFactory;

    public function price()
    {
       return $this->hasOne(ProductPrice::class, 'product_id');
    }
}
