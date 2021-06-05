<div  class="bg-indigo-900 shopavel-vertical-navigation-aside-wrapper"  x-show="LayoutTab">

    <div class="ml-8 mt-8 mb-4 felx w-full">
        <p class="text-xs font-semibold">Layout</p>
    </div>


    <div class="mx-4">
        <a class="flex px-4 py-3 my-1 hover:bg-indigo-700 hover:text-white rounded-lg shopavel-vertical-navigation-item {{ Request::is('*layout*') ? 'bg-indigo-900 color-white' : 'text-indigo-300' }}" href="{{ route('layout.index') }}">
            <span class="material-icons shopavel-vertical-navigation-item-icon">design_services</span>
            <div class="ml-4 font-semibold">Layout</div>
        </a>
    </div>
    <div class="mx-4">
        <a class="flex px-4 py-3 my-1 hover:bg-indigo-700 hover:text-white rounded-lg shopavel-vertical-navigation-item {{ Request::is('*menus*') ? 'bg-indigo-900 color-white' : 'text-indigo-300' }}" href="{{ route('menus.index') }}">
            <span class="material-icons shopavel-vertical-navigation-item-icon">account_tree</span>
            <div class="ml-4 font-semibold">Menus</div>
        </a>
    </div>



  </div>
