@extends('layouts.master')


@section('content')
  <div class="row row-offcanvas row-offcanvas-left">
    <div class="col-0 col-md-3 sidebar-offcanvas" id="sidebar">
      @include('includes.partials.sidebar')
    </div>
    <div class="col-12 col-md-9">
      @yield('content')
    </div>
  </div>
  @endsection