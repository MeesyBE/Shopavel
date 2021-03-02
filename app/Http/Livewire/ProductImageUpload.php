<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductImageUpload extends Component
{
    public $addImage = false;


    public function addImage(){
        $this->addImage = true;

    }

    public function render()
    {
        return view('livewire.product-image-upload');
    }

}
