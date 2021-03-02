<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PageContent;

class PageEntity extends Model
{
    use HasFactory;


    public function content()
   {
       return $this->hasOne(PageContent::class, 'page_id');
   }
}
