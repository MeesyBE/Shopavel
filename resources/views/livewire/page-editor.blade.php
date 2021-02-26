<div class="h-full">
    <div class="flex flex-row p-2 h-full">
        <style media="screen">
            .drag-and-drop {
                display: flex;
                max-width: 760px;
                padding: 20px;
                margin: 0 auto;
            }

            .drag-and-drop__container {
                position: relative;
                overflow: hidden;
                width: 50%;
                border: 1px solid #ccc;
                border-radius: 10px;
            }

            .drag-and-drop__divider {
                padding: 10px;
                font-size: 20px;
                align-self: center;
            }

            .drag-and-drop__items {
                position: relative;
                overflow: hidden;
                height: 100%;
                min-height: 150px;
                margin: 0 -1px;
                padding-bottom: 40px;
                border-top: 1px solid #ccc;
            }

            .drag-and-drop__items--adding {
                background-color: #9AE6B4;
            }

            .drag-and-drop__items--removing {
                background-color: #FBD38D;
            }

            .drag-and-drop__item {
                padding: 15px 20px;
                border: 1px solid #ccc;
                border-top: 0;
                line-height: 1;
                cursor: move;
                background-color: #fff;
            }

            .drag-and-drop__item:hover {
                background-color: #eee;
            }

            .drag-and-drop__item--dragging {
                color: #ccc !important;
                background-color: #fff !important;
            }
        </style>
        @include('pages.editor.sidebar')

        <div class="w-4/5 ml-4 flex bg-white ">
            <div class="flex flex-col min-w-full p-4">
                <div class="editor-view h-3/4 min-w-full">






                                <script type="text/javascript">
                                </script>

                                <script src="{{ asset('/js/editor.js') }}" ></script>

                </div>
                <div class=" min-w-full">
                    <textarea name="name" rows="8" cols="80">
                    {{ $pageContentJson }}
                    </textarea>
                </div>

            </div>

        </div>
    </div>

</div>
