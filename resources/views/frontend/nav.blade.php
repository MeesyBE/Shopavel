{{-- <pre>
  @php
    print_r($menu);
  @endphp
</pre> --}}
<nav>
  <ul>

  </ul>
</nav>


<header class="bg-white">
    <div class="container mx-auto px-6 py-3">
        <div class="flex items-center justify-between">
            <div class="w-full text-gray-700 md:text-center text-2xl font-semibold">
                Logo
            </div>
        </div>
        <nav :class="isOpen ? '' : 'hidden'" class="sm:flex sm:justify-center sm:items-center mt-4 hidden">
            <div class="flex flex-col sm:flex-row">
              @foreach ($menu->menuItems as $menuitem)
                  <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="{{ $menuitem->menu_item_href }}">
                    {{ $menuitem->menu_item_name }}
                  </a>
              @endforeach
            </div>
        </nav>
    </div>
</header>
