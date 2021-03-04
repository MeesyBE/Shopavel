<div x-show="addAttribute" class="fixed z-10 inset-0 overflow-y-auto ">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true" >
            <div class="absolute inset-0 bg-gray-500 opacity-75" @click="addAttribute = false"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div  class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
        role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                            Add attribute
                        </h3>


                        <div class="flex flex-col mt-2">
                          <div class="form-group">
                            <label for="product_attribute_key">Attribute key</label>
                            <input name="product_attribute_key" id="product_attribute_key"
                            class="w-full border bg-white rounded px-3 py-2 outline-none"
                            wire:model="newProductAttributekey" />
                          </div>
                          <div class="form-group mt-4">
                            <label for="product_attribute_name">Attribute name</label>
                            <input name="product_attribute_name" id="product_attribute_name"
                            class="w-full border bg-white rounded px-3 py-2 outline-none"
                            wire:model="newProductAttributeName" />
                          </div>
                          <div class="form-group mt-4">
                            <label for="product_attribute_type">Attribute type</label>
                            <select name="product_attribute_type" id="product_attribute_type"
                            class="w-full border bg-white rounded px-3 py-2 outline-none"
                            wire:model="newProductAttributeType">
                                <option value="0" class="py-1" selected>Text</option>
                                <option value="1"  class="py-1">Option</option>
                                <option value="2"  class="py-1">Multi option</option>
                            </select>
                          </div>
                          <div class="form-group mt-4">
                            <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded inline-flex items-center"
                             wire:click.prevent="createNewAttribute">Create</button>
                          </div>

                        </div>


                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">

            </div>
        </div>
    </div>
</div>
