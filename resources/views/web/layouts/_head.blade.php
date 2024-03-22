<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  @if (View::hasSection('noindex'))
  <meta name="robots" content="noindex" />
  @endif
  
  <meta property="og:url" content="{{ request()->url() }}" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="@yield('title') | {{ config('app.name').'' }}" />
  <meta property="og:description" content="@yield('description')" />
  <meta property="og:site_name" content="@yield('title') | {{ config('app.name').'' }}" />
  <meta property="og:image" content="{{ asset('img/common/ogp.png') }}" />
  
  <meta name="description" content="@yield('description')">
  <meta name="author" content="@yield('title')">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title') | デザインデザイン</title>
  {{-- SEO対策 --}}
  @if (View::hasSection('canonical'))
    <link rel="canonical" href="@yield('canonical')" />
  @endif
  {{-- script --}}
  @include('web.layouts._script')
  {{-- favicon --}}
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="img/png" sizes="32x32" href="{{ asset('img/favicon/favicon.ico') }}">
  <link rel="icon" type="img/png" sizes="16x16" href="{{ asset('img/favicon/favicon.ico') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Roboto:wght@300;400;700;900&family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&family=Zen+Old+Mincho:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/styles-web.css') }}?<?php date_default_timezone_set('Asia/Tokyo'); echo date("ymdHi",filemtime("css/styles-web.css")); ?>">
  <meta name="msapplication-TileColor" content="#2c67e1">
  <meta name="theme-color" content="#ffffff">
</head>