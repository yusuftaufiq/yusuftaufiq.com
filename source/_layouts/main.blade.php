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

  <script defer async src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>

<body class="overflow-hidden h-full bg-gray-100 text-gray-800 leading-normal font-sans antialiased relative m-0 p-0 dark:bg-gray-800 dark:text-gray-100">
  <div class="js-loading-screen absolute flex justify-center items-center z-30 h-full w-full bg-gray-800">
    <svg class="h-20 w-20 animate-spin text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
      <path fill="currentColor" d="M222.7 32.15C227.7 49.08 218.1 66.9 201.1 71.94C121.8 95.55 64 169.1 64 255.1C64 362 149.1 447.1 256 447.1C362 447.1 448 362 448 255.1C448 169.1 390.2 95.55 310.9 71.94C293.9 66.9 284.3 49.08 289.3 32.15C294.4 15.21 312.2 5.562 329.1 10.6C434.9 42.07 512 139.1 512 255.1C512 397.4 397.4 511.1 256 511.1C114.6 511.1 0 397.4 0 255.1C0 139.1 77.15 42.07 182.9 10.6C199.8 5.562 217.6 15.21 222.7 32.15V32.15z"/>
    </svg>
  </div>
  <div class="js-swiper h-full w-full">
    @include('_partials.header')
    <div class="swiper-wrapper">
      @yield('slides')
    </div>
    <div class="swiper-pagination"></div>
  </div>
</body>

</html>