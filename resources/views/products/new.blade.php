@extends('layouts.shopavel', ['title' => 'Products', 'subtitle' => 'New Product'])
@section('content')
  <div class="flex flex-row justify-between">
    <h1 class="content-title font-size-24">New Product</h1>
  </div>
  <div class="flex flex-row justify-between p-4">
    <form action="{{ route('products.create') }}" method="POST" class="w-400 mw-full"> <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
      {{ csrf_field() }}
      <!-- Input -->
      <div class="form-group">
        <label for="full-name" class="required">Product name</label>
        <input name="product_name" class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" type="text" value="" />
      </div>

      <div class="form-group">
        <label for="full-name" class="required">URL key</label>
        <input type="text" class="form-control" id="url_key" name="url_key" value="/" required="required">
      </div>

      <!-- Submit button -->
      <input class="btn btn-primary" type="submit" value="Submit">
    </form>

  </div>
@stop
