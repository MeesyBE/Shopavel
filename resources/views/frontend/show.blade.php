@extends('frontend.layout', [
  'title' => $page->page_name ?? '',
])
@section('content')
  @php
  // $page->content = $page->content()
  @endphp
  {{-- <h2 class="text-6xl">{{ $page->page_name }}</h2> --}}
  <style>
  {!! $page->content->page_style ?? "" !!}
  </style>
  {!! $page->content->page_content ?? '' !!}

  @if(isset($products))
    @include('frontend.category')
  @endif
  @if(isset($product))
    @include('frontend.product')
  @endif
  {{-- <pre>
    @php
      print_r($page);
    @endphp
  </pre> --}}
@stop
