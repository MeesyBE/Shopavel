@extends('layouts.shopavel', ['title' => 'Menus', 'subtitle' => 'New Menu'])
@section('content')
  <div class="flex flex-row p-4">
      <h1 class="content-title font-size-24">New menu</h1>
    </div>
  <div class="flex min-w-full flex-row p-4">
    <form class="min-w-full" action="{{ route('menus.create') }}" method="POST" class="w-400 mw-full" id="newmenu"> <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
      {{ csrf_field() }}
      <!-- Input -->
      <div class="form-group">
        <label for="full-name" class="required">menu name</label>
        <input type="text" class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" id="menu_name" name="menu_name" placeholder="menu name" required="required">
      </div>
    
    </form>
  </div>
    <div class="flex min-w-full flex-row p-4">
      <a href="{{ route('menus.index')  }}">
        <button class="bg-gray-700 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded inline-flex items-center mt-4">Cancel</button>

      </a>
      <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded inline-flex items-center ml-4 mt-4" type="submit" form="newmenu">Add</button>

    </div>

@stop
