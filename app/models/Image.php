<?php

class Image extends Eloquent
{

    protected $fillable = array('image', 'album_id');

    public function album()
    {
        return $this->belongsTo('Album');
    }
}
