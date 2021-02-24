@extends('layouts.shopavel', ['title' => 'Products', 'subtitle' => ''])
@section('content')
    <div class="flex flex-row justify-between">
      <a href="{{ route('products.new') }}">
        <button class="btn"><span class="fas fa-plus"></span></button>
      </a>
    </div>

    <div class="flex flex-row justify-between p-4">
      <table class="table w-full">
        <thead>
          <tr>
            <th>#</th>
            <th class="text-left">Name</th>
            <th class="text-left">Url_key</th>
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
                  <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded" type="button" name="button">
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
