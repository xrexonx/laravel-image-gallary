<!DOCTYPE html>
<html>
<head>
<meta name="rexone11282014" content="content">
	<title>REXON::Image Gallary</title>
  {{HTML::style('css/style.css')}}
  {{HTML::style('css/transitions.css')}}
  {{HTML::style('css/bootstrap.min.css')}}
  {{HTML::style('css/font-awesome.min.css')}}
  {{-- {{HTML::style('css/bootstrap.no-icons.min.css')}} --}}
  {{HTML::style('lightbox/nivo-lightbox.css')}}
	{{HTML::style('lightbox/themes/default/default.css')}}
</head>
<body>
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
<div id="mainContainer">
	@yield('content')
</div>
@include('createAlbum')
</body>
{{HTML::script('./js/jquery.min.js')}}
{{HTML::script('./js/shortcut.js')}}
{{HTML::script('./js/bootstrap.min.js')}}
{{HTML::script('./js/bootbox.min.js')}}
{{HTML::script('./lightbox/nivo-lightbox.min.js')}}
{{-- image collage --}}
{{HTML::script('./js/jquery.collagePlus.min.js')}}
{{HTML::script('./js/jquery.removeWhitespace.min.js')}}
{{HTML::script('./js/jquery.collageCaption.min.js')}}
{{HTML::script('./js/collageplus.js')}}
{{HTML::script('./js/scripts.js')}}

</html>


