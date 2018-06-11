<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $primaryKey = 'prod_id';
    protected $table = 'products';
    protected $fillable = ['img_path','img_name'];

    public function user()
    {
      return $this->belongsTo('App\User','audit_user','prod_id');//->withTimestamps();
    }

    public function Image_Photo()
    {
      return $this->belongsToMany('App\Image_Photo','prod_images','prod_id','img_id')->withTimestamps();
    }

    public function department()
    {
      return $this->belongsTo('App\Department','dept_id','prod_id');//->withTimestamps();
    }
}
