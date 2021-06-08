@extends('layouts.shopavel', ['title' => 'Menus', 'subtitle' => 'Edit menu'])
@section('content')

      @livewire('menu-items', [compact('id'), compact('slugs')])


@stop
