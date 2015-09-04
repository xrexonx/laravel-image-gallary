<div class="navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">REXON</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li> {{HTML::link('/', 'Image Gallary', ['class' => 'active'])}}</li>
      <!-- <li> {{HTML::link('showCreateForm', 'Create Album')}}</li> -->
      <li> {{HTML::link('#', 'Create Album (Ctrl+c) ',  ['data-toggle' => 'modal', 'data-target' => '#myModal1', 'id' => 'createModal'])}}</li>
      <li> {{HTML::link('#', 'Link1')}}</li>
      <li> {{HTML::link('#', 'Link2')}}</li>
    </ul>
  </div>
</div>