<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductPrice;
use App\Models\ProductAttribute;

class ProductEntity extends Model
{
    use HasFactory;

    public function price()
    {
       return $this->hasOne(ProductPrice::class, 'product_id');
    }

    public function attributes()
    {
       return $this->hasMany(ProductAttribute::class, 'product_id');
    }

    public function slug()
    {
        return $this->morphOne('App\Models\Slug', 'slugmodel');
    }
}
