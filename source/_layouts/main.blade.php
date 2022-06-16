<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="h-full relative">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

  <meta property="og:title" content="{{ $page->title ?? $page->siteTitle }}' | '{{ $page->siteName }}" />
  <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
  <meta property="og:url" content="{{ $page->getUrl() }}" />
  <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

  <title>{{ $page->title ?? $page->siteTitle }}</title>

  <link rel="icon" href="assets/images/favicon.ico">
  <link rel="canonical" href="{{ $page->getUrl() }}">
  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

  <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>

<body class="h-full bg-gray-100 text-gray-800 leading-normal font-sans antialiased relative m-0 p-0 dark:bg-gray-800 dark:text-gray-100">
  <div class="swiper h-full w-full">
    @include('_partials.header')
    <div class="swiper-wrapper">
      @yield('slides')
    </div>
    <div class="swiper-pagination"></div>
  </div>
</body>

</html>