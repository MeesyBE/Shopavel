<style media="screen">
  img { height: 500px; width: 100%;}
  .object-fit_cover { object-fit: cover; width: 100%;}
</style>
<div class="flex flex-wrap overflow-hidden m-4">
    <div class="w-full overflow-hidden md:w-full lg:w-1/2 xl:w-1/2">
        <div class="rounded border-1 bg-gray-100 p-4 m-2 shadow-md">

            @foreach ($product->images as $image)
              <div class="image">
                  <img class="object-fit_cover" src="/storage/{{ $image->image_path}}" alt="">
              </div>
              @php
                break;
              @endphp
            @endforeach
        </div>
    </div>
    <div class="w-full overflow-hidden md:w-full lg:w-1/2 xl:w-1/2">
        <div class="rounded border-1 bg-gray-100 p-4 m-2 shadow-md">
            <center>
              <h5>{{ $product->product_name }}</h5>
              <b>{{ $product->price->product_price ?? '0.00' }}</b><br/>
                <button class="bg-purple-800 text-white px-4 py-2 rounded" name="button">Add to cart</button>
            </center>
        </div>
    </div>
</div>
