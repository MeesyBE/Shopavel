<div  class="bg-indigo-900 shopavel-vertical-navigation-aside-wrapper"  x-show="userInterface">

    <div class="ml-8 mt-8 mb-4 felx w-full">
        <p class="text-xs font-semibold">SETTINGS</p>
    </div>


    <div class="mx-4">
        <a class="flex px-4 py-3 my-1 hover:bg-indigo-700 hover:text-white rounded-lg shopavel-vertical-navigation-item " href="{{ route('users.index') }}">
          <span class="material-icons shopavel-vertical-navigation-item-icon">people</span>
          <div class="ml-4 font-semibold">Users</div>
        </a>
    </div>


    <div class="mx-4">
        <a class="flex px-4 py-3 my-1 hover:bg-indigo-700 hover:text-white rounded-lg shopavel-vertical-navigation-item " href="{{ route('settings.index') }}">
          <span class="material-icons shopavel-vertical-navigation-item-icon">miscellaneous_services</span>
          <div class="ml-4 font-semibold">Site settings</div>
        </a>
    </div>


  </div>
