<div class="flex flex-col border px-4 my-4" x-data="{ openPrices: false }">
    <div class="flex flex-row w-full justify-between" x-on:click.prevent="openPrices = !openPrices" >
        <div class="my-4">
            <p class="text-2xl font-bold">Prices</p>

        </div>
        <div class="my-4">
            <div class="">
                <button class="font-bold pt-1 inline-flex items-center ml-4" name="button">
                  <span x-show="openPrices" class="material-icons">expand_more</span>
                  <span x-show="!openPrices" class="material-icons">expand_less</span>
                </button>

            </div>
        </div>
    </div>

    <div x-show="openPrices" class="flex flex-row w-full justify-between mb-4">
    <div class="my-4 w-full">
        <div class="form-group">
            <label for="">Price </label>
            <input name="product_price" class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" type="number" value="{{ $product->price->product_price ?? "0" }}" />
        </div>
        <div class="form-group mt-4">
            <label for="">Discount price </label><small class="text-gray-500 text-2xs">Leave empty for no discount</small>
            <input name="product_discount_price" class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" type="number"
              value="{{ $product->price->product_discount_price ?? "0" }}" />
        </div>
    </div>
</div>

</div>
