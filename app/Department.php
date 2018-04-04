<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey = 'dept_id';
    protected $table = 'department';

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
