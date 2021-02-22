@php
  $title = "Page: (".$page->id.") - ".$page->page_name;
@endphp
@extends('layouts.shopavel', ['title' => $title, 'subtitle' => 'Edit pages'])
@section('content')
    <div class="flex flex-row p-4">
        <a href="{{ route('pages.index') }}">

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



    {{-- <pre>
      @php
        print_r($pages);
      @endphp
    </pre> --}}

@stop
