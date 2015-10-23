@extends('layouts.content')

@section('panel-heading')
<span class="panel-heading-container">
  <h4 class="panel-title panel-title-text">
    <a href="{{ url('/') }}">Home</a> / <a href="{{ url($source) }}">{{{ $title }}}</a> / Results
  </h4>
  <a role="button" class="btn btn-info btn-xs panel-title-return" href="{{ url($source) }}">
    <span class="glyphicon glyphicon-arrow-left"></span>
    Return
  </a>
</span>
@stop

@section('panel-content')
    @if($payload)
        @foreach($payload as $paragraph)
            <p>{{ $paragraph }}</p>
        @endforeach
    @else
        Something went horribly wrong.
    @endif
@stop
