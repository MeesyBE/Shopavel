{{-- <pre>
  @php
    print_r($menu);
  @endphp
</pre> --}}
<style media="screen">
nav{
  overflow: hidden;
}
nav ul {
  list-style-type: none;
  display: inline;
  margin: 0;
  padding: 0;
}
nav ul li{
  display: inline;
}
nav ul li a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

</style>
<nav>
  <ul>
    @foreach ($menu->menuItems as $menuitem)
      <li>
        <a href="{{ $menuitem->menu_item_href }}">
          {{ $menuitem->menu_item_name }}
        </a>
      </li>
    @endforeach
  </ul>
</nav>
