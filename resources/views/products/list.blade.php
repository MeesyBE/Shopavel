@extends('layouts.layout')
@section('content')
    <div class="flex flex-row justify-between">
      <h1 class="content-title font-size-24">Products</h1>
      <a href="{{ route('products.new') }}">
        <button class="btn"><span class="fas fa-plus"></span></button>
      </a>
    </div>

    <div class="flex flex-row justify-between">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Url_key</th>
            <th class="text-right">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
            <tr>
              <th>{{ $product->id }}</th>
              <td>{{ $product->product_name }}</td>
              <td>{{ $product->product_url_key }}</td>
              <td class="text-right">
                <a href="{{ route('products.edit', $product->id) }}">
                  <button type="button" name="button">
                    Edit
                  </button>
                </a>
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>
    </div>




    {{-- <pre>
      @php
        print_r($products);
      @endphp
    </pre> --}}

@stop
