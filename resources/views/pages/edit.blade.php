@php
  $title = "Page: (".$page->id.") - ".$page->page_name;
@endphp
@extends('pages.editor.layout', [
  'title' => $title,
  'subtitle' => 'Edit pages',
  'view' => 'full'
])
@section('content')

    <div class="flex flex-row p-2 h-full">

      @include('pages.editor.sidebar')


      <div class="w-4/5 ml-4 flex bg-white ">
        <div class="flex min-w-full p-4">

            <div class="">

              <div class="form-group mt-10">
                <textarea class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" name="content" rows="8" cols="80"></textarea>
              </div>
            </div>
        </div>

      </div>
    </div>




@stop
