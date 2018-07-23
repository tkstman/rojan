<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey = 'dept_id';
    protected $table = 'departments';

    public function products()
    {
        return $this->hasMany('App\Product','dept_id');
    }
}
