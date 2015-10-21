@extends('layouts.master');

@section('heading')
<h4 class="panel-title">About This Tool</h4>
@stop

@section('content')
<p>
  The Developer's Best Friend is a software development tool to generate two types of demo data.
  First, Lorem Ipsum random text may be generated according to the number of words, sentences, or
  paragraphs specified. Second, random user data may be generated according to the available
  choices of data fields and quantity of users.
</p>
<p>
  Please choose which tool you would like to use...
</p>
<div>
  <div class="well btn-block-container">
    <a role="button" class="btn btn-info btn-large btn-block" href="{{ url('lorem-ipsum') }}">Lorem Ipsum Generator</a>
    <a role="button" class="btn btn-info btn-large btn-block" href="{{ url('fake-user') }}">Fake User Generator</a>
  </div>
</div>
@stop
