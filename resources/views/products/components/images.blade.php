<div class="flex border rounded shadow-md px-4 my-4">
    <div class="flex flex-row w-full justify-between">
        <div class="">
            <h2>Images</h2>

        </div>
        <div class="mt-10">
            <div class="" x-data="{ addImage: false }">
                <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded inline-flex items-center ml-4" x-on:click.prevent="addImage = true" name="button">Add Image</button>
                @include('products.components.addImage')

            </div>
        </div>
    </div>

</div>
