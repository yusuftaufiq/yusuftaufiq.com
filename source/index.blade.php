@extends('_layouts.main')

@section('slides')
  <div class="swiper-slide">@include('_sections.home')</div>
  <div class="swiper-slide">@include('_sections.about')</div>
  <div class="swiper-slide">@include('_sections.skills')</div>
  <div class="swiper-slide">@include('_sections.projects')</div>
  <div class="swiper-slide">@include('_sections.contacts')</div>
@endsection
