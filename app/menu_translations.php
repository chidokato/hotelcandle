<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu_translations extends Model
{
    protected $table = "menu_translations";
	public function menu()
	{
		return $this->belongsTo('App\menu','menu_id','id');
	}
}
