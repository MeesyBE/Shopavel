<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pages\PageContent;

class PageEntity extends Model
{
    use HasFactory;


   public function content()
   {
       return $this->hasOne(PageContent::class, 'page_id');
   }

   public function slug()
   {
       return $this->morphOne('App\Models\Slug', 'slugmodel');
   }
}
