<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = "category";
	public function User()
	{
		return $this->belongsTo('App\User','user_id','id');
	}
	public function category_translations()
    {
        return $this->hasMany('App\category_translations','category_id','id');
    }
}
