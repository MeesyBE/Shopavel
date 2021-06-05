@extends('layouts.shopavel', ['title' => 'Slugs', 'subtitle' => ''])
@section('content')
    <div class="table-wrapper p-4">
        <table class="table-auto min-w-full">
          <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  #
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Slug
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Slug used on model
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Slug model id
                </th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Action
                </th>
              </tr>
          </thead>
          <tbody>
              @foreach ($slugs as $slug)
                <tr>
                    <td class="px-6 py-2 "> {{ $slug->id }} </td>
                    <td class="px-6 py-2 ">  {{  $slug->slug_request }} </td>
                    <td class="px-6 py-2 ">{{ str_replace("App\Models\\", "", $slug->slugmodel_type) ?? "" }} </td>
                    <td class="px-6 py-2 ">{{ $slug->slugmodel_id ?? "" }} </td>
                    <td class="px-6 py-2 text-right">
                      <a href="{{ route('seo.slugs.edit', $slug->id) }}">
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
