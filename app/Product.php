<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $primaryKey = 'prod_id';
    protected $table = 'products';

    public function user()
    {
      return $this->belongsTo('App\User','audit_user','prod_id');
    }

    public function Image_Photo()
    {
      return $this->belongsTo('App\Image_Photo','img_id','prod_id');
    }

    public function department()
    {
      return $this->belongsTo('App\Department','dept_id','prod_id');
    }
}
