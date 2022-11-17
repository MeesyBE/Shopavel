@extends('layouts.shopavel', ['title' => 'Products', 'subtitle' => 'New Product'])
@section('content')
  <div class="flex flex-col justify-between p-4">
    <form action="{{ route('products.create') }}" method="POST" class="w-400 w-full"> <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
      {{ csrf_field() }}
      <!-- Input -->
      <div class="w-full">
        <label for="full-name" class="required">Product name</label>
        <input name="product_name" class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" type="text" value="" />
      </div>

      <div class="w-full">
        <label for="full-name" class="required">URL key</label>
        <input type="text" class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" id="url_key" name="url_key" value="/" required="required">
      </div>

      <!-- Submit button -->
      <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 mt-4 rounded inline-flex items-center" type="submit" >
        Submit
      </button>
    </form>

  </div>
@stop
