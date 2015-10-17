<?php

class Album extends Eloquent
{

    protected $fillable = ['album_name', 'desc'];


    public function image()
    {
        return $this->hasMany('Image');
    }
}
