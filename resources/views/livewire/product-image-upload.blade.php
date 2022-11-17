<div>
    <div x-data="{ addImage: false }">

          @include('products.components.images')
          <div class="flex border px-4 my-4">
              <div class="flex flex-row w-full justify-between">
                  <div class="my-4">
                      <p class="text-2xl font-bold">Images</p>
                      @foreach($images as $image)
                        <img src="/storage/{{ $image->image_path }}" style="height: 100px; width: auto;"/>
                      @endforeach
                  </div>
                  <div class="my-4">
                      <div class="">
                          <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded inline-flex items-center ml-4" x-on:click.prevent="addImage = true" name="button">Add Image</button>
                          @include('products.components.addImage')

                      </div>
                  </div>
              </div>

          </div>


          <div x-show="addImage" class="fixed z-10 inset-0 overflow-y-auto ">
              <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                  <!--
                    Background overlay, show/hide based on modal state.

                    Entering: "ease-out duration-300"
                      From: "opacity-0"
                      To: "opacity-100"
                    Leaving: "ease-in duration-200"
                      From: "opacity-100"
                      To: "opacity-0"
                  -->
                  <div class="fixed inset-0 transition-opacity" aria-hidden="true" >
                      <div class="absolute inset-0 bg-gray-500 opacity-75" @click="addImage = false"></div>
                  </div>

                  <!-- This element is to trick the browser into centering the modal contents. -->
                  <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                  <!--
                    Modal panel, show/hide based on modal state.

                    Entering: "ease-out duration-300"
                      From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                      To: "opacity-100 translate-y-0 sm:scale-100"
                    Leaving: "ease-in duration-200"
                      From: "opacity-100 translate-y-0 sm:scale-100"
                      To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                  -->
                  <div  class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                          <div class="sm:flex sm:items-start">
                              <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                                  <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                                      Add image
                                  </h3>


                                  <div class="flex flex-row mt-2">


                                              <input type="file"  wire:model="image" />
                                              <button type="button" wire:click="uploadImage" class="bg-green-500">save</button>

                                  </div>


                              </div>
                          </div>
                      </div>
                      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">

                      </div>
                  </div>
              </div>
          </div>


      </div>
</div>
