@extends('layouts.master');

@section('heading')
<span class="panel-heading-container">
  <h4 class="panel-title panel-title-text">Lorem Ipsum Generator</h4>
  <a role="button" class="btn btn-info btn-xs panel-title-return" href="{{ url('/') }}">
    <span class="glyphicon glyphicon-arrow-left"></span>
    Return
  </a>
</span>
@stop

@section('content')
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
      </div>
    </div>
    <div class="form-group">
      <label for="text-quantity" class="col-md-6 control-label">Number of Words</label>
      <div class="col-md-6">
        <input type="number" min="1" max="100" class="form-control" name="text_quantity" id="text-quantity" placeholder="1-100" required>
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
