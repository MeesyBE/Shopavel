@extends('layouts.layout')
@section('content')
  <div class="flex flex-row justify-between">
    <h1 class="content-title font-size-24">New page</h1>
  </div>
  <div class="flex flex-row justify-between">
    <form action="{{ route('pages.create') }}" method="POST" class="w-400 mw-full"> <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
      {{ csrf_field() }}
      <!-- Input -->
      <div class="form-group">
        <label for="full-name" class="required">Page name</label>
        <input type="text" class="form-control" id="page_name" name="page_name" placeholder="Page name" required="required">
      </div>

      <div class="form-group">
        <label for="full-name" class="required">URL key</label>
        <input type="text" class="form-control" id="url_key" name="url_key" value="/" required="required">
      </div>

      <!-- Submit button -->
      <input class="btn btn-primary" type="submit" value="Submit">
    </form>

  </div>
@stop
