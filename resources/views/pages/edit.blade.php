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
              </div>
            </div>
        </div>

      </div>
    </div>




@stop
