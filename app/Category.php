<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Category extends Model
{
	public function children(){
	  	return $this->hasMany('Category', 'id_cate', 'id');
	}

	public function parent(){
	  	return $this->belongsTo('App\Category', 'id_cate');
	}
}
