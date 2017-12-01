<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', config('app.name'))</title>
  <meta name="description" content="@yield('meta_description', 'Colombo\'s project')">
  <meta name="author" content="@yield('meta_author', 'Colombo')">

  @yield('meta')

  @stack('before-styles')

  <link href="{{url('css/app.css')}}" rel="stylesheet">
  <link href="{{url('vendor/fa/css/font-awesome.min.css')}}" rel="stylesheet">

  @stack('after-styles')
</head>

<body>
@include('includes.partials.nav')
@include('includes.partials.logged-in-as')
<main class="container-fluid" role="main">
  @yield('content')
</main>
@include('includes.partials.footer')
<script src="{{url('js/app.js')}}"></script>
</body>
</html>
