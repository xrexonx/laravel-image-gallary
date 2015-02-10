@extends('master')
@section('content')
<div id="loginForm" style="margin:auto;width:25em;margin-top:15em;">
<form class="form-horizontal">
{{Form::open(['class' => 'form-horizontal'])}}
  <fieldset>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label"></label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="Email" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label"></label>
      <div class="col-lg-10">
        <input class="form-control" id="inputPassword" placeholder="Password" type="password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-default">Log me In</button>
        <button class="btn btn-default">Sign me Up</button>
      </div>
    </div>
  </fieldset>
{{Form::close()}}
</div>
@stop




<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Create Album
</button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create Album</h4>
      </div>
      <div class="modal-body">
          {{Form::open(['id' => 'create_album', 'files' => 'true', 'class' => 'form-horizontal'])}}
    <fieldset>
      <div class="form-group">
        <div class="col-lg-10">
           {{Form::text('album', '', ['placeholder' => 'Album Name', 'class' => 'form-control', 'autocomplete' => 'off'])}}
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10">
           {{Form::text('desc', '', ['placeholder' => 'Description', 'class' => 'form-control', 'autocomplete' => 'off'])}}
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10">
           {{Form::file('image[]',  ['multiple'])}}
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
        {{Form::reset('Cancel', ['class' => 'btn btn-default'])}}
          {{Form::submit('Submit', ['class' => 'btn btn-default'])}}
        </div>
      </div>
    </fieldset>
  {{Form::close()}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
