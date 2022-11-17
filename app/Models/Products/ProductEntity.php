<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products\ProductPrice;
use App\Models\Products\ProductAttribute;
use App\Models\Image;

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


    public function images()
    {
       return $this->morphMany(Image::class, 'belongs_to');
    }

    public function slug()
    {
        return $this->morphOne('App\Models\Slug', 'slugmodel');
    }
}
