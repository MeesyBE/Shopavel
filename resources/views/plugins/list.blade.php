@extends('layouts.shopavel', ['title' => 'Plugins', 'subtitle' => 'Extend shopavel with plugins'])
@section('content')


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
