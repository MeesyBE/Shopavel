@extends('layouts.shopavel', [
  'title' => 'Products',
  'subtitle' => 'Manage products',
  'buttontekst' => 'New Product',
  'buttonlink' => route('products.new'),
  'buttonicon' => 'add'
])
@section('content')
    <div class="flex flex-row justify-between">
      <a href="{{ route('products.new') }}">
        <button class="btn"><span class="fas fa-plus"></span></button>
      </a>
    </div>

    <div class="flex flex-row justify-between p-4">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Url_key</th>
            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
            <tr>
              <td class="px-6 py-2 ">{{ $product->id }}</td>
              <td class="px-6 py-2 ">{{ $product->product_name }}</td>
              <td class="px-6 py-2 ">{{ $product->slug->slug_request ?? "" }}</td>
              <td class="px-6 py-2 text-right">
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
