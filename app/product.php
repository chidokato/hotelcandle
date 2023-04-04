<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "product";
	
    public function articles()
    {
        return $this->hasMany('App\articles','product_id','id');
    }
}
