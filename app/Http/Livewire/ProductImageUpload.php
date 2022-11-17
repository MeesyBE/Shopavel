<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Image;

class ProductImageUpload extends Component
{
    use WithFileUploads;

    public $addImage = false;
    public $image;
    public $images;
    public $productId;

    public function addImage()
    {
        $this->addImage = true;

    }

    public function uploadImage()
    {
      $this->validate([
        'image' => 'image|max:1024', // 1MB Max
      ]);

      $image_path = $this->image->store('image', 'public');

      $image = New Image;
      $image->image_path = $image_path;
      $image->image_type = substr($image_path, -3);
      $image->image_order = 0;
      $image->belongs_to_type = "App\Models\ProductEntity";
      $image->belongs_to_id = $this->productId;

      $image->save();

    }

    public function render()
    {
        return view('livewire.product-image-upload');
    }

}
