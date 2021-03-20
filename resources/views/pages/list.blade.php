@extends('layouts.shopavel', [
  'title' => 'Pages',
  'subtitle' => 'Edit pages',
  'buttontekst' => 'New Page',
  'buttonlink' => route('pages.new'),
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
          @foreach ($pages as $page)
            <tr>
                <td class="px-6 py-2 "> {{ $page->id }} </td>
                <td class="px-6 py-2 ">  {{ $page->page_name }} </td>
                <td class="px-6 py-2 ">{{ $page->slug->slug_request ?? "" }} </td>
                <td class="px-6 py-2 ">{{ $page->page_status }}</td>

                <td class="px-6 py-2 text-right">
                  <a href="{{ route('pages.edit', $page->id) }}">
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
