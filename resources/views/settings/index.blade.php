@extends('layouts.shopavel', [
  'title' => 'Settings',
  'subtitle' => 'Configurate your store',
  'view' => 'settings'
])
@section('content')


  <div class="flex flex-row p-2 h-full">

    @include('settings.components.sidebar')


    <div class="w-4/5 ml-4 flex bg-white shadow-md">
      <div class="flex flex-col min-w-full px-4">
        <div class="flex w-full">
          <h2>General Settings</h2>
        </div>
        <div class="flex w-full">
          <form class="w-full" action="{{ route('settings.save') }}" method="post">
            {{ csrf_field() }}
            <label for="settings.site_name" class="font-bold text-sm">Site name</label>
            <input
              name="settings_site_name"
              class="border-2 border-gray-200 rounded w-full py-2 mb-4 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800"
              type="text"
              value="{{ $settings['settings_site_name'] ?? '' }}"
              >
            <label for="settings_site_url" class="font-bold text-sm">Site URL</label>
            <input name="settings_site_url" class="border-2 border-gray-200 rounded w-full py-2 px-4 mb-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" type="text" value="{{ $settings['settings_site_url'] ?? '' }}">


            <label for="settings_currency" class="font-bold text-sm">Currency</label>
            <select name="settings_currency" class="border-2 border-gray-200 rounded w-full py-2 px-4 mb-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" type="text">
              @if (!empty($settings['settings_currency']))
                <option value="{{$settings['settings_currency']}}">{{$settings['settings_currency']}}</option>
                <option disabled> - </option>
              @else
                <option value="" selected> - </option>
                <option value="EUR">EUR</option>
                <option value="USD">USD</option>
                <option value="GBP">GBP</option>

              @endif
            <select>

            <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded inline-flex items-center" type="submit">
                Save
            </button>
          </form>


        </div>

      </div>

    </div>
  </div>








@stop
