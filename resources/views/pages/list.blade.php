@extends('layouts.shopavel', [
  'title' => 'Pages',
  'subtitle' => 'Edit pages',
  'buttontekst' => 'New Page',
  'buttonlink' => route('pages.new'),
  'buttonicon' => 'add',
  'view' => 'default',
])
@section('content')

<div class="table-wrapper p-4 ">
    <table class="table-auto min-w-full">
      <thead class="bg-gray-50">
          <tr>
            <th class="w-1/6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              #
            </th>
            <th class="w-2/6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Title
            </th>
            <th class="w-1/6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              URL key
            </th>
            <th class="w-1/6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Active
            </th>
            <th class="w-1/6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Action
            </th>
          </tr>
      </thead>
      <tbody>
          @foreach ($pages as $page)
            <tr>
                <td> {{ $page->id }} </td>
                <td>  {{ $page->page_name }} </td>
                <td> {{ $page->page_url_key }} </td>
                <td>{{ $page->page_status }}</td>

                <td>
                  <a href="{{ route('pages.edit', $page->id) }}">
                    <button class="mat-focus-indicator  mat-stroked-button mat-button-base">
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
