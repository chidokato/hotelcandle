<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category_translations extends Model
{
    protected $table = "category_translations";
	public function seo()
	{
		return $this->belongsTo('App\seo','seo_id','id');
	}
	public function category()
	{
		return $this->belongsTo('App\category','category_id','id');
	}
	public function articles()
    {
        return $this->hasMany('App\articles','category_id','id');
    }
    public function articles_translations()
    {
        return $this->hasMany('App\articles_translations','category_translations_id','id');
    }
}
