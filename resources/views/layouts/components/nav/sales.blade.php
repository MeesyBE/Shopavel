<div  class="bg-indigo-900 shopavel-vertical-navigation-aside-wrapper"  x-show="SalesTab">

    <div class="ml-8 mt-8 mb-4 felx w-full">
        <p class="text-xs font-semibold">Sales</p>
    </div>


    <div class="mx-4">
        <a class="flex px-4 py-3 my-1 hover:bg-indigo-700 hover:text-white rounded-lg shopavel-vertical-navigation-item {{ Request::is('*products*') ? 'bg-indigo-900 color-white' : 'text-indigo-300' }}" href="{{ route('products.index') }}">
            <span class="material-icons shopavel-vertical-navigation-item-icon">shopping_cart</span>
            <div class="ml-4 font-semibold">Products</div>
        </a>
    </div>


    <div class="mx-4">
        <a class="flex px-4 py-3 my-1 hover:bg-indigo-700 hover:text-white rounded-lg shopavel-vertical-navigation-item " href="{{ route('orders.list') }}">
          <span class="material-icons shopavel-vertical-navigation-item-icon">receipt</span>
          <div class="ml-4 font-semibold">Orders</div>
        </a>
    </div>


      <div class="mx-4">
          <a class="flex px-4 py-3 my-1 hover:bg-indigo-700 hover:text-white rounded-lg shopavel-vertical-navigation-item " href="{{ route('carts.list') }}">
            <span class="material-icons shopavel-vertical-navigation-item-icon">shopping_bag</span>
            <div class="ml-4 font-semibold">Carts</div>
          </a>
      </div>



  </div>
