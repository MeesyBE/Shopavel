<div class="shopavel-vertical-navigation-group-item">

          <div class="ml-8 my-4 felx w-full">
              <p class="text-xs font-semibold">MENU</p>
          </div>

    <div class="mx-4">
        <a class="flex px-4 py-3 my-1 hover:bg-indigo-700 hover:text-white rounded-lg shopavel-vertical-navigation-item {{ Request::is('*dashboard*') ? 'bg-indigo-900 color-white' : 'text-indigo-300' }}" href="/admin/dashboard">
            <span class="material-icons shopavel-vertical-navigation-item-icon">dashboard</span>
            <div class="ml-4 font-semibold">Dashboard</div>
        </a>
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


    <div class="mx-4">
        <a class="flex px-4 py-3 my-1 hover:bg-indigo-700 hover:text-white rounded-lg shopavel-vertical-navigation-item {{ Request::is('*products*') ? 'bg-indigo-900 color-white' : 'text-indigo-300' }}" href="{{ route('products.index') }}">
            <span class="material-icons shopavel-vertical-navigation-item-icon">shopping_cart</span>
            <div class="ml-4 font-semibold">Products</div>
        </a>
    </div>


    <div class="mx-4">
        <a class="flex px-4 py-3 my-1 hover:bg-indigo-700 hover:text-white rounded-lg shopavel-vertical-navigation-item {{ Request::is('*menus*') ? 'bg-indigo-900 color-white' : 'text-indigo-300' }}" href="{{ route('menus.index') }}">
            <span class="material-icons shopavel-vertical-navigation-item-icon">account_tree</span>
            <div class="ml-4 font-semibold">Menus</div>
        </a>
    </div>


    <div class="mx-4">
        <a class="flex px-4 py-3 my-1 hover:bg-indigo-700 hover:text-white rounded-lg shopavel-vertical-navigation-item {{ Request::is('*layout*') ? 'bg-indigo-900 color-white' : 'text-indigo-300' }}" href="{{ route('layout.index') }}">
            <span class="material-icons shopavel-vertical-navigation-item-icon">design_services</span>
            <div class="ml-4 font-semibold">Layout</div>
        </a>
    </div>


    <div class="mx-4"  @click="SeoTab = !SeoTab" @click.away="SeoTab = false">
        <a class="flex px-4 py-3 my-1 hover:bg-indigo-700 hover:text-white rounded-lg shopavel-vertical-navigation-item {{ Request::is('*plugins*') ? 'bg-indigo-900 color-white' : 'text-indigo-300' }}">
            <span class="material-icons shopavel-vertical-navigation-item-icon">manage_search</span>
            <div class="ml-4 font-semibold">SEO</div>
        </a>
    </div>


    <div class="mx-4">
        <a class="flex px-4 py-3 my-1 hover:bg-indigo-700 hover:text-white rounded-lg shopavel-vertical-navigation-item {{ Request::is('*plugins*') ? 'bg-indigo-900 color-white' : 'text-indigo-300' }}" href="{{ route('plugins.index') }}">
            <span class="material-icons shopavel-vertical-navigation-item-icon">extension</span>
            <div class="ml-4 font-semibold">Plugins</div>
        </a>
    </div>


    <div class="mx-4" @click="userInterface = !userInterface" @click.away="userInterface = false">
        <div class="flex px-4 py-3 my-1 hover:bg-indigo-700 hover:text-white rounded-lg shopavel-vertical-navigation-item {{ Request::is('*settings*') ? 'bg-indigo-900 color-white' : 'text-indigo-300' }}">
            <span class="material-icons shopavel-vertical-navigation-item-icon">settings</span>
            <div class="ml-4 font-semibold">Settings</div>
        </div>
    </div>





</div>
