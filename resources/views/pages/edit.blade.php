@php
  $title = "Page: (".$page->id.") - ".$page->page_name;
@endphp
@extends('layouts.shopavel', [
  'title' => $title,
  'subtitle' => 'Edit pages',
  'view' => 'full'
])
@section('content')

    <div class="flex flex-row p-2 h-full">

      @include('pages.editor.sidebar')


      <div class="w-4/5 ml-4 flex bg-white ">
        <div class="flex min-w-full p-4">
          <form class="min-w-full" action="{{ route('pages.save', $page->id) }}" method="POST" id="SavePage">
            @csrf()
            <div class="">
              <div class="form-group">
                <label for="">Page title </label>
                <input name="page_name" class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" type="text" value="{{ $page->page_name }}" />
              </div>
              <div class="form-group">
                <label for="">URL key </label>
                <input name="url_key" class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" type="text" value="{{ $page->page_url_key }}" />
              </div>
              <div class="form-group mt-10">
                <textarea class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" name="content" rows="8" cols="80"></textarea>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>




    {{-- <pre>
      @php
        print_r($pages);
      @endphp
    </pre> --}}

@stop
