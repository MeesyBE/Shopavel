@extends('layouts.layout')
@section('content')

      <h1 class="content-title font-size-24">Plugins</h1>



      @php

      $path = base_path() . "/plugins";

      function getModels($path){
          $out = [];
          $results = scandir($path);
          foreach ($results as $result) {
              if ($result === '.' or $result === '..') continue;
              $filename = $path . '/' . $result;
              if (is_dir($filename)) {
                  $out = array_merge($out, getModels($filename));
              }else{
                  require_once($filename);
                  $out[] = substr($filename,0,-4);
              }
          }
          return $out;
      }

      // dd(getModels($path));
      @endphp
@stop
