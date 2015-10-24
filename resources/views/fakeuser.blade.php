@extends('layouts.content')

@section('panel-heading')
<span class="panel-heading-container">
  <h4 class="panel-title panel-title-text">
    <a href="{{ url('/') }}">Home</a> / Fake User Generator
  </h4>
  <a role="button" class="btn btn-info btn-xs panel-title-return" href="{{ url('/') }}">
    <span class="glyphicon glyphicon-arrow-left"></span>
    Return
  </a>
</span>
@stop
 
@section('panel-content')
<p>
  You may choose additional parameters to generate along with a name for each user:
</p>
<div class="container">
  <form id="fake-user-generator-form" class="form-horizontal" action="{{ url('fake-user') }}" method="POST" autocomplete="off">
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <div class="form-group">
      <label for="address" class="col-md-6 control-label">Address</label>
      <div class="col-md-6">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="form_array[]" id="address" value="address">
          </label>
        </div>
        @if($errors->get('address'))
          @foreach($errors->get('address') as $error_text_type_message)
            <div class="alert alert-danger alert-block" role="alert">
              {{{ $error_text_type_message }}}
            </div>
          @endforeach
        @endif
      </div>
    </div>
    <div class="form-group">
      <label for="phone" class="col-md-6 control-label">Phone Number</label>
      <div class="col-md-6">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="form_array[]" id="phone" value="phone">
          </label>
        </div>
        @if($errors->get('phone'))
          @foreach($errors->get('phone') as $error_text_type_message)
            <div class="alert alert-danger alert-block" role="alert">
              {{{ $error_text_type_message }}}
            </div>
          @endforeach
        @endif
      </div>
    </div>
    <div class="form-group">
      <label for="birthdate" class="col-md-6 control-label">Birthdate</label>
      <div class="col-md-6">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="form_array[]" id="birthdate" value="birthdate">
          </label>
        </div>
        @if($errors->get('birthdate'))
          @foreach($errors->get('birthdate') as $error_text_type_message)
            <div class="alert alert-danger alert-block" role="alert">
              {{{ $error_text_type_message }}}
            </div>
          @endforeach
        @endif
      </div>
    </div>
    <div class="form-group">
      <label for="user-quantity" class="col-md-6 control-label">Quantity of Users</label>
      <div class="col-md-6">
        <input type="number" min="1" max="100" class="form-control" name="user_quantity" id="user-quantity" placeholder="1-100" required>
        @if($errors->get('text_quantity'))
          @foreach($errors->get('text_quantity') as $error_text_qty_message)
            <div class="alert alert-danger alert-block">
              {{ $error_text_qty_message }}
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
