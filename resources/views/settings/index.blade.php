@extends('layouts.shopavel', [
  'title' => 'Settings',
  'subtitle' => 'Configurate your store',
])
@section('content')
  <div class="table-wrapper p-4 ">

            @foreach ($settings as $setting)
              <tr>
                  <td> {{ $setting->id }} </td>
                  <td>  {{ $setting->page_name }} </td>
                  <td> {{ $setting->page_url_key }} </td>
                  <td>{{ $setting->page_status }}</td>

                  <td>
                    <a href="">
                      <button class="mat-focus-indicator  mat-stroked-button mat-button-base">
                        Edit
                      </button>
                    </a>
                  </td>

              </tr>
            @endforeach

          
  </div>



@stop
