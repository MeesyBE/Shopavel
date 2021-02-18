@extends('layouts.layout')
@section('content')
  <div class="flex flex-row justify-between">
    <h1 class="content-title font-size-24">New Product</h1>
  </div>
  <div class="flex flex-row justify-between">
    <form action="{{ route('products.create') }}" method="POST" class="w-400 mw-full"> <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
      {{ csrf_field() }}
      <!-- Input -->
      <div class="form-group">
        <label for="full-name" class="required">Product name</label>
        <input type="text" class="form-control" id="product_name" name="product_name" placeholder="product name" required="required">
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
