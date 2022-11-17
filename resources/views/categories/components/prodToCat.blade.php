<div class="flex flex-col border px-4 my-4" x-data="{ openSeo: false }">
    <div class="flex flex-row w-full justify-between" x-on:click.prevent="openSeo = !openSeo">
        <div class="my-4">
            <p class="text-2xl font-bold">Products</p>

        </div>
        <div class="my-4">
            <div class="">
                <button class="font-bold pt-1 inline-flex items-center ml-4" name="button">
                    <span x-show="openSeo" class="material-icons">expand_more</span>
                    <span x-show="!openSeo" class="material-icons">expand_less</span>
                </button>
            </div>
        </div>
    </div>
    <div x-show="openSeo" class="flex flex-row w-full justify-between mb-4">
        <div class="my-4 w-full">
          <div class="table-wrapper p-4">
              <table class="table-auto min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        In category
                      </th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        #
                      </th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Title
                      </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                      <tr>
                          <td class="px-6 py-2 "> <input type="radio" name="products[{{ $product->id }}]" value="{{ $product->id }}" @if(in_array($product->id, $prodIds)) checked="true" @endif> </td>
                          <td class="px-6 py-2 "> {{ $product->id }} </td>
                          <td class="px-6 py-2 ">  {{ $product->product_name }} </td>
                      </tr>
                    @endforeach

                  </tbody>

              </table>
          </div>
        </div>
    </div>

</div>
