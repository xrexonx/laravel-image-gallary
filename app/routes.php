<?php

Route::get('/', function()
{
	$data['albumData'] = Album::all();
	return View::make('index')->with($data);
});

// Route::get('showCreateForm', 'AlbumController@createAlbum');
Route::post('submitFormData', 'AlbumController@submitAlbum');
Route::get('showImages/{id?}', 'AlbumController@showImages');
Route::post('addImages', 'AlbumController@addImage');
Route::post('deleteAlbum', 'AlbumController@deleteAlbum');
