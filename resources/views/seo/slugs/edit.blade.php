@extends('layouts.shopavel', ['title' => "Edit Slug: $slug->slug_request", 'subtitle' => ''])
@section('content')
    <div class="flex min-w-full flex-row p-4">
      <form class="min-w-full" action="{{ route('seo.slugs.save', $slug->id) }}" method="POST" class="w-400 mw-full" id="saveslug"> <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
        {{ csrf_field() }}
        <!-- Input -->
        <div class="form-group">
          <label for="full-name" class="required">Slug</label>
          <input type="text" class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" id="slug_request" name="slug_request" value="{{ $slug->slug_request }}" required="required">
        </div>

        <div class="form-group">
          <label for="full-name" class="required">Slug model</label>
          <input type="text" class="bg-gray-500 focus:bg-white border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight cursor-not-allowed" id="slugmodel_type" name="slugmodel_type" value="{{ str_replace("App\Models\\", "", $slug->slugmodel_type) }}" disabled="true">
        </div>
        <div class="form-group">
          <label for="full-name" class="required">Slug model id</label>
          <input type="text" class="bg-gray-500 focus:bg-white border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight cursor-not-allowed" id="slugmodel_id" name="slugmodel_id" value="{{ $slug->slugmodel_id }}" disabled="true">
        </div>
      </form>
    </div>
      <div class="flex min-w-full flex-row p-4">
        <a href="{{ route('seo.slugs.list')  }}">
          <button class="bg-gray-700 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded inline-flex items-center mt-4">Cancel</button>

        </a>
        <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded inline-flex items-center ml-4 mt-4" type="submit" form="saveslug">Save</button>

      </div>
@stop
