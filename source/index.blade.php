@extends('_layouts.main')

@section('slides')
  <div class="swiper-slide">@include('_sections.home')</div>
  <div class="swiper-slide">@include('_sections.about')</div>
  <div class="swiper-slide">@include('_sections.skill')</div>
  <div class="swiper-slide">@include('_sections.project')</div>
  <div class="swiper-slide">@include('_sections.contact')</div>
@endsection
