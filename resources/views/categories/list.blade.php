@extends('layouts.shopavel', [
  'title' => 'Categories',
  'subtitle' => 'Edit categories',
  'buttontekst' => 'New Category',
  'buttonlink' => route('categories.new'),
  'buttonicon' => 'add',
  'view' => 'default',
])
@section('content')

<div class="table-wrapper p-4">
    <table class="table-auto min-w-full">
      <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              #
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Title
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              URL key
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Active
            </th>
            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
              Action
            </th>
          </tr>
      </thead>
      <tbody>
          @foreach ($categories as $category)
            <tr>
                <td class="px-6 py-2 "> {{ $category->id }} </td>
                <td class="px-6 py-2 ">  {{ $category->category_name }} </td>
                <td class="px-6 py-2 ">{{ $category->slug->slug_request ?? "" }} </td>
                <td class="px-6 py-2 ">{{ $category->category_status }}</td>

                <td class="px-6 py-2 text-right">
                  <a href="{{ route('categories.edit', $category->id) }}">
                    <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded">
                      Edit
                    </button>
                  </a>
                </td>

            </tr>
          @endforeach

        </tbody>

    </table>
</div>

@stop
