@extends('layouts.master')

@section('main-content')
<!-- Content Layout -->
<div class="panel panel-info panel-padding">
  <div class="panel-heading">
    @yield('panel-heading')
  </div>
  <div class="panel-body">
    @yield('panel-content')
  </div>
</div>
@stop
