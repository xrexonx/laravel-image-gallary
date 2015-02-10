@extends('master')
@section('content')
<div align="center">
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" data-id="{{ $album_id }}">Add image in this album</button>
</div>
<br>
<br>
<div class="row">
	@if ($images)
		@foreach ($images as $image)
			@if ($image->image)
				<div class="col-xs-6 col-md-3">
					<div id="imageData{{ $image->id }}" class="thumbnail">
						<a class="gallery-img"  data-lightbox-gallery="gallery-img" href="{{ URL::to('/uploads/'.$image->image) }}" title="{{$image->image}}">
							<img src="{{ URL::to('/uploads/'.$image->image) }}" alt="{{ $image->id }}"/>
						</a>
					</div>
				</div>
			@endif
		@endforeach 
	@endif
</div>
@stop
@include('addImage')