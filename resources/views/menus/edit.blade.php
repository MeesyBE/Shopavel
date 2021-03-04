@extends('layouts.shopavel', ['title' => 'Menus', 'subtitle' => 'Edit menu'])
@section('content')
<style media="screen">
  /* CHECKBOX TOGGLE SWITCH */
  /* @apply rules for documentation, these do not work as inline style */
  .toggle-checkbox:checked {
  @apply: right-0 border-green-400;
    right: 0;
    border-color: #68D391;
  }
  .toggle-checkbox:checked + .toggle-label {
  @apply: bg-green-400;
    background-color: #68D391;
  }
</style>
<div class="flex flex-row justify-between p-4">
  <div class="">
      <a href="{{ route('menus.index') }}">
          <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
              <span class="material-icons">close</span>
              Close
          </button>
      </a>
      <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded inline-flex items-center ml-4" form="SaveMenu">
          <span class="material-icons">
              save
          </span> Save
          <span class="mat-button-focus-overlay"></span>
      </button>
  </div>

</div>

<form class="flex w-full" id="SaveMenu" action="{{ route('menus.save', $menu->id) }}" method="post">
  {{ csrf_field() }}
  <div class="p-4 w-full">
      <label for="">Enable product: </label>
      <div class="relative inline-block w-10 ml-2 align-middle select-none transition duration-200 ease-in">
          <input type="checkbox" name="menu_enable" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"
          @if ($menu->menu_status == 1) checked @endif
          />
          <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
      </div>


    <div class="">
      <div class="form-group">
        <label for="">menu title </label>
        <input name="menu_name" class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" type="text" value="{{ $menu->menu_name }}" />
      </div>

      <div class="form-group mt-4">
        <textarea class="form-control"  rows="8" cols="80"></textarea>
      </div>

    </div>

    </div>
</form>

    {{-- <pre>
      @php
        print_r($menus);
      @endphp
    </pre> --}}

@stop
