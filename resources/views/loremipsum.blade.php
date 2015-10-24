@extends('layouts.content')

@section('panel-heading')
<span class="panel-heading-container">
  <h4 class="panel-title panel-title-text">
    <a href="{{ url('/') }}">Home</a> / Lorem Ipsum Generator
  </h4>
  <a role="button" class="btn btn-info btn-xs panel-title-return" href="{{ url('/') }}">
    <span class="glyphicon glyphicon-arrow-left"></span>
    Return
  </a>
</span>
@stop

@section('panel-content')
<div class="container">
  <form id="lorem-ipsum-generator-form" class="form-horizontal" action="{{ url('lorem-ipsum') }}" method="POST" autocomplete="off">
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <div class="form-group">
      <label for="text-type" class="col-md-6 control-label">Text Type</label>
      <div class="col-md-6">
        <div class="radio">
          <label>
            <input type="radio" name="text_type" value="words" id="text-type" required>
            Words
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="text_type" value="sentences" id="text-type" required>
            Sentences
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="text_type" value="paragraphs" id="text-type" required>
            Paragraphs
          </label>
        </div>
        @if($errors->get('text_type'))
          @foreach($errors->get('text_type') as $error_text_type_message)
            <div class="alert alert-danger alert-block" role="alert">
              {{{ $error_text_type_message }}}
            </div>
          @endforeach
        @endif
      </div>
    </div>
    <div class="form-group">
      <label for="text-quantity" class="col-md-6 control-label">Number of Words</label>
      <div class="col-md-6">
        <input type="number" min="1" max="100" class="form-control" name="text_quantity" id="text-quantity" placeholder="1-100" required>
        @if($errors->get('text_quantity'))
          @foreach($errors->get('text_quantity') as $error_text_qty_message)
            <div class="alert alert-danger alert-block">
              {{{ $error_text_qty_message }}}
            </div>
          @endforeach
        @endif
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <button type="submit" class="btn btn-info btn-width">Generate</button>
      </div>
    </div>
  </form>
</div>
@stop
