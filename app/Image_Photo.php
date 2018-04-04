<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image_Photo extends Model
{
    //
    protected $primaryKey = 'img_id';
    protected $table = 'image_photo';

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}