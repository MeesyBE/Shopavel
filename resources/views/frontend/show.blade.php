@extends('frontend.layout', [
  'title' => $page->page_name,
])
@section('content')

  <h2 class="text-6xl">{{ $page->page_name }}</h2>

@stop
