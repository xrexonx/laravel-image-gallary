<!-- Create Album Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create Album</h4>
      </div>
      {{Form::open(['id' => 'create_album', 'files' => 'true', 'class' => 'form-horizontal'])}}
        <div class="modal-body">
            <div class="form-group">
              <div class="col-lg-10">
                 {{Form::text('albumName', '', ['placeholder' => 'Album Name', 'class' => 'form-control', 'autocomplete' => 'off'])}}
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10">
                 {{Form::text('desc', '', ['placeholder' => 'Description', 'class' => 'form-control', 'autocomplete' => 'off'])}}
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10">
                  Upload Multiple Image
                 {{Form::file('image[]',  ['multiple'])}}
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              {{Form::reset('Cancel', ['class' => 'btn btn-default'])}}
              {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            </div>
          </div>
        </div>
      {{Form::close()}}
    </div>
  </div>
</div>