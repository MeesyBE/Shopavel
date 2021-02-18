@extends('layouts.layout')
@section('content')
    <div class="flex flex-row justify-between mb-20">
      <h1 class="content-title font-size-24">category: ({{ $category->id }}) - {{ $category->category_name }} </h1>
      <div class="">
        <a href="{{ route('categories.index') }}">
          <button class="btn btn-danger">Cancel</button>
        </a>
        <a href="{{ route('categories.save') }}">
          <button class="btn btn-primary">Save</button>
        </a>
      </div>

    </div>

    <div class="">
      <div class="form-group">
        <label for="">category title </label>
        <input class="form-control" type="text" value="{{ $category->category_name }}" />
      </div>
      <div class="form-group">
        <label for="">URL key </label>
        <input class="form-control" type="text" value="{{ $category->category_url_key }}" />
      </div>
      <div class="form-group">
        <textarea class="form-control" name="name" rows="8" cols="80"></textarea>
      </div>

    </div>


    {{-- <pre>
      @php
        print_r($categories);
      @endphp
    </pre> --}}

@stop
