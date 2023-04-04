<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles_translations extends Model
{
    protected $table = "articles_translations";
    public function articles()
	{
		return $this->belongsTo('App\articles','articles_id','id');
	}
	public function category()
	{
		return $this->belongsTo('App\category','category_id','id');
	}
	public function category_translations()
    {
        return $this->belongsTo('App\category_translations','category_translations_id','id');
    }
    
}
