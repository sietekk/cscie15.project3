@extends('layouts.content')

@section('panel-heading')
<span class="panel-heading-container">
  <h4 class="panel-title panel-title-text">Fake User Generator</h4>
  <a role="button" class="btn btn-info btn-xs panel-title-return" href="{{ url('/') }}">
    <span class="glyphicon glyphicon-arrow-left"></span>
    Return
  </a>
</span>
@stop
 
@section('panel-content')
<div class="container">
  <form id="fake-user-generator-form" class="form-horizontal" action="{{ url('fake-user') }}" method="POST" autocomplete="off">
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <div class="form-group">
      <label for="name" class="col-md-6 control-label">Name</label>
      <div class="col-md-6">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="name" id="name">
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="address" class="col-md-6 control-label">Address</label>
      <div class="col-md-6">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="address" id="address">
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="phone" class="col-md-6 control-label">Phone Number</label>
      <div class="col-md-6">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="phone" id="phone">
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="birthdate" class="col-md-6 control-label">Birthdate</label>
      <div class="col-md-6">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="birthdate" id="birthdate">
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="user-quantity" class="col-md-6 control-label">Number of Users</label>
      <div class="col-md-6">
        <input type="number" min="1" max="100" class="form-control" name="user_quantity" id="user-quantity" placeholder="1-100" required>
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
