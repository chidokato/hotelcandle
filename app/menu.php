<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table = "menu";
	public function User()
	{
		return $this->belongsTo('App\User','user_id','id');
	}
	public function menu_translations()
    {
        return $this->hasMany('App\menu_translations','menu_id','id');
    }
}
