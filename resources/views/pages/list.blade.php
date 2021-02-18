@extends('layouts.layout')
@section('content')
    <div class="flex flex-row justify-between">
      <h1 class="content-title font-size-24">Pages</h1>
      <a href="{{ route('pages.new') }}">
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
          @foreach ($pages as $page)
            <tr>
              <th>{{ $page->id }}</th>
              <td>{{ $page->page_name }}</td>
              <td>{{ $page->page_url_key }}</td>
              <td class="text-right">
                <a href="{{ route('pages.edit', $page->id) }}">
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
        print_r($pages);
      @endphp
    </pre> --}}

@stop
