<?php

class AlbumController extends BaseController {

	function createAlbum() {
        return View::make('createAlbum');
    }

    function submitAlbum() {    

        //$validation = Validator::make(Input::all(), $rules);

    $album = new Album;
		$album->album_name = Input::get('albumName');
		$album->desc       = Input::get('desc');
		$insertFlag        = $album->save();

        if ($insertFlag) {

            foreach (Input::file('image') as $image) {

                $filename = $this->setFilename($album->id, $image);

                if ($filename) {
                   $img = new Image;
                   $img->image = $filename;
                   $img->album_id = $album->id;
                   $img->save();
                }
            }
        }

    	return Response::json(['success' => true, 'message' => 'Album Successfully Created']);
    }


    function showImages($id = null) {
        $data['images'] = Image::where('album_id', '=', $id)->orderBy('created_at', 'desc')->get();
        $data['album_id'] = $id;
        return View::make('showImages')->with($data);
    }

    function addImage () {

        foreach (Input::file('image') as $image) {
            $albumId = Input::get('album_id');
            $filename = $this->setFilename($albumId, $image);
            
            if ($filename) {
               $img = new Image;
               $img->image = $filename;
               $img->album_id = $albumId;
               $img->save();
            }
        }

        return Redirect::to('showImages/'.$albumId);

    }

    function deleteAlbum () {

        extract($_POST);

        $album = Album::find($id);
        $delAlbum = $album->delete();

       if ($delAlbum)
       {

        //get Image filename
        $filename = [];
        $filename[] = Image::where('album_id', '=', $id)->lists('image');

        //unlink the image.
        foreach ($filename[0] as $key => $filename)
        {
            $imagePath = 'public/uploads/'.$filename;
            if (file_exists($imagePath))
            {
                unlink($imagePath);
            }
        }

       $img = Image::where('album_id', '=', $id);
       $delImage = $img->delete();

       }

       return Response::json(['success' => true, 'message' => 'Album Successfully Deleted']);

    }

    function setFilename () {

        $id    = func_get_arg(0);
        $image = func_get_arg(1);
        $filename = Str::lower( $id.'_'.uniqid().'_'.pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME).'.'.$image->getClientOriginalExtension() );
        $image->move('public/uploads', $filename);
        return $filename;

    }


}//end of class
