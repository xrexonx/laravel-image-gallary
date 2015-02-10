@extends('master')
@section('content')
<div class="row" style="max-width:80em;margin:auto;">
	@if ($albumData)
		@foreach ($albumData as $album)
			<div class="col-xs-6 col-md-3">
				<div id="albumData{{ $album->id }}" style="background-color:#484E55;" class="thumbnail">
					<a href="{{ URL::to('showImages/' . $album->id) }}"><img src="images/folder-image.png" alt="{{ $album->album_name }}"></a>
					<p>Name : {{ $album->album_name }} </p>
					<p>Desc : {{ $album->desc }} </p>
					<p>Date Created : {{ date("F d, Y", strtotime($album->created_at)) }}</p>
					<a href="{{ URL::to('showImages/' . $album->id) }}" title="{{ URL::to('showImages/' . $album->id) }}" class="btn btn-default">View</a>
					<button data-id="{{ $album->id }}" id="btnDelete" class="btn btn-default">Delete</button>
				</div>
			</div>
		@endforeach
	@endif
</div>
@stop