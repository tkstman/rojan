<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function Image_Photo()
    {
      return $this->hasMany('App\Image_Photo');
    }

    public function department()
    {
      return $this->belongsTo('App\Department');
    }
}
