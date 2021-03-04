<div class="flex flex-col border px-4 my-4" x-data="{ openSeo: false }">
    <div class="flex flex-row w-full justify-between" x-on:click.prevent="openSeo = !openSeo">
        <div class="my-4">
            <p class="text-2xl font-bold">Content</p>

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

        </div>
    </div>

</div>
