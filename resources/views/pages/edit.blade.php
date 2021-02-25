@php
  $title = "Page: (".$page->id.") - ".$page->page_name;
@endphp
@extends('pages.editor.layout', [
  'title' => $title,
  'subtitle' => 'Edit pages',
  'view' => 'full'
])
@section('content')


                <livewire:page-editor :page="$page" />


@stop
