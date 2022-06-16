@php
  $navigationItems = collect([
    collect(['title' => 'Home', 'link' => '#home']),
    collect(['title' => 'About', 'link' => '#about']),
  ]);
@endphp

@extends('_layouts.main')

@section('slides')
  <div class="swiper-slide">@include('_sections.home')</div>
@endsection
