@extends('layouts.shopavel', ['title' => 'Products', 'subtitle' => 'Edit product'])
@section('content')
    <div class="flex flex-row justify-between p-4">
      <div class="">
        <a href="{{ route('products.index') }}">
          <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
            <span class="material-icons">close</span>
            Close
          </button>
        </a>
          <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded inline-flex items-center ml-4"  form="SavePage">
            <span class="material-icons">
              save
            </span> Save
            <span class="mat-button-focus-overlay"></span>
          </button>
      </div>

    </div>

    <div class="flex w-full">
      <div class="p-4  w-full">
        <div class="form-group">
          <label for="">product title </label>
          <input name="product_name" class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" type="text" value="{{ $product->product_name }}" />
        </div>
        <div class="form-group">
          <label for="">URL key </label>
          <input name="url_key" class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" type="text" value="{{ $product->product_url_key }}" />
        </div>
        <div class="form-group">
          <textarea class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" class="form-control" name="name" rows="8" cols="80"></textarea>
        </div>
      </div>


    </div>


    {{-- <pre>
      @php
        print_r($products);
      @endphp
    </pre> --}}

@stop
