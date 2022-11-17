<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products\ProductToCategory;
use App\Models\Products\ProductEntity;

class CategoryEntity extends Model
{
    use HasFactory;


    public function slug()
    {
        return $this->morphOne('App\Models\Slug', 'slugmodel');
    }

    public function products()
  {
      return $this->hasManyThrough(
                ProductEntity::class,
                ProductToCategory::class,
                'category_id', // Foreign key on the environments table...
                'id', // Foreign key on the deployments table...
                'id', // Local key on the projects table...
                'product_id' // Local key on the environments table...
              );
  }
}
