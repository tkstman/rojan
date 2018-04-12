<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey = 'dept_id';
    protected $table = 'department';

    public function products()
    {
        return $this->hasMany('App\Product','prod_id','dept_id');
    }
}
