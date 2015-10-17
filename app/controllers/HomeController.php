<?php

class HomeController extends BaseController
{

    public function createAlbum()
    {
        return View::make('createAlbum');
    }

    public function submitAlbum()
    {

        $album = new Album;
        $album->album_name = Input::get('albumName');
        $album->desc = Input::get('desc');
        $album->save();

        foreach (Input::file('image') as $image) {
            $filename = Str::lower(
                uniqid() . '_' . pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '.' . $image->getClientOriginalExtension()
            );

            $img = new Image;
            $img->image = $filename;
            $img->album_id = $album->id;
            $img->save();
            $uploadFlag = $image->move('public/uploads', $filename);

            if ($uploadFlag) {
                $uploadedImage[] = $filename;
            }
        }

        return Response::json(['success' => true]);
    }

}
