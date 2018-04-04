<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  //
    protected $primaryKey = 'role_id';
    public $timestamps = false;
    protected $table = 'role';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
