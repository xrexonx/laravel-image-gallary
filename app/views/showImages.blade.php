@extends('master')
@section('content')
<div align="center">
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" data-id="{{ $album_id }}">Add image in this album</button>
</div>
<br>
<section class="Collage">
		@if ($images)
		@foreach ($images as $image)
			@if ($image->image)
				<div class="Image_Wrapper">
					<div id="imageData{{ $image->id }}" class="">
						<a class="gallery-img"  data-lightbox-gallery="gallery-img" href="{{ URL::to('/uploads/'.$image->image) }}" title="{{$image->image}}">
							<img src="{{ URL::to('/uploads/'.$image->image) }}" alt="{{ $image->id }}"/>
						</a>
					</div>
				</div>
			@endif
		@endforeach 
	@endif
</section>
<div class="row">

</div>
@stop
@include('addImage')