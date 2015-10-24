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
    @if($payload && $source == 'lorem-ipsum')
        @foreach($payload as $paragraph)
            <div class="well">{{{ $paragraph }}}</div>
        @endforeach
    @elseif($payload && $source == 'fake-user')
        @foreach($payload as $user)
            <div class="well">
            @foreach($user as $id => $data)
                @if($id == '0')
                    <div style="font-weight:bold;">{{{ $data }}}</div>
                @else
                    <div>{{{ $data }}}</div>
                @endif
            @endforeach
            </div>
        @endforeach
    @else
        @include('errors.error')
    @endif
@stop
