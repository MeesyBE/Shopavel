<div  class="bg-indigo-900 shopavel-vertical-navigation-aside-wrapper"  x-show="ContentTab">

    <div class="ml-8 mt-8 mb-4 felx w-full">
        <p class="text-xs font-semibold">CONTENT</p>
    </div>

    <div class="mx-4">
        <a class="flex px-4 py-3 my-1 hover:bg-indigo-700 hover:text-white rounded-lg shopavel-vertical-navigation-item {{ Request::is('*pages*') ? 'bg-indigo-900 color-white' : 'text-indigo-300' }}" href="/admin/pages">
            <span class="material-icons shopavel-vertical-navigation-item-icon">file_copy</span>
            <div class="ml-4 font-semibold">Pages</div>
        </a>
    </div>

    <div class="mx-4">
        <a class="flex px-4 py-3 my-1 hover:bg-indigo-700 hover:text-white rounded-lg shopavel-vertical-navigation-item {{ Request::is('*categories*') ? 'bg-indigo-900 color-white' : 'text-indigo-300' }}" href="{{ route('categories.index') }}">
            <span class="material-icons shopavel-vertical-navigation-item-icon">category</span>
            <div class="ml-4 font-semibold">Categories</div>
        </a>
    </div>


  </div>
