<div>
  <div class="flex flex-col border px-4 my-4" x-data="{ openAttributes: false, addAttribute: @entangle('addAttribute')  }">
      <div class="flex flex-row w-full justify-between" x-on:click.prevent="openAttributes = !openAttributes">
          <div class="my-4">
              <p class="text-2xl font-bold">Attributes</p>

          </div>
          <div class="my-4">
              <div class="">
                  <button class="font-bold pt-1 inline-flex items-center ml-4" name="button">
                      <span x-show="openAttributes" class="material-icons">expand_more</span>
                      <span x-show="!openAttributes" class="material-icons">expand_less</span>
                  </button>
              </div>
          </div>
      </div>
      <div x-show="openAttributes" class="flex flex-row w-full justify-between mb-4">
          <div class="my-4 w-full">
            <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded inline-flex items-center" x-on:click.prevent="addAttribute = true" name="button">Add Attribute</button>
            @include('products.components.addAttributes')
            <div class="attributes mt-4">
              @foreach ($productAttributes as $productAttribute)
                <div class="flex">
                  <p>{{ $productAttribute->product_attribute_name }}</p>

                </div>
              @endforeach
            </div>



          </div>
      </div>

  </div>

</div>
