<div class="h-full">
    <div class="flex flex-row p-2 h-full">

        @include('pages.editor.sidebar')

        <div class="w-4/5 ml-4 flex bg-white ">
            <div class="flex min-w-full p-4">

                <div class="editor-view">
                    {{-- The best athlete wants his opponent at his best. --}}
                    <div class="">
                        <button wire:click="addDiv">
                            Div
                        </button>

                        <textarea name="name" rows="8" cols="80">
                        {{ $pageContentJson }}
                        </textarea>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
