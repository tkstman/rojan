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
      return $this->hasMany('App\Image_Photo','img_id','prod_id');//->withTimestamps();
    }

    public function department()
    {
      return $this->belongsTo('App\Department','dept_id','prod_id');//->withTimestamps();
    }
}
