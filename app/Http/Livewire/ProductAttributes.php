<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products\ProductAttribute;
use App\Models\Products\ProductAttributeValue;
use App\Models\Products\ProductToAttribute;

class ProductAttributes extends Component
{
    public $newProductAttributekey = "";
    public $newProductAttributeName = "";
    public $newProductAttributeType = 0;
    public $addAttribute = false;
    public $productAttributes;

    public function mount()
    {
      $this->productAttributes = ProductAttribute::get();
    }

    public function createNewAttribute()
    {
      $productAttribute = new ProductAttribute;

      $productAttribute->product_attribute_key = $this->newProductAttributekey;
      $productAttribute->product_attribute_name = $this->newProductAttributeName;
      $productAttribute->product_attribute_type = $this->newProductAttributeType;

      $productAttribute->save();
      $this->addAttribute = false;
    }

    public function render()
    {
        return view('livewire.product-attributes');
    }
}
