<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Product;

class Comment extends Model
{
    public function product(){
	  	return $this->belongsTo('App\Product', 'id_product', 'id');
	}

	public function user(){
	  	return $this->belongsTo('App\User', 'id_user', 'id');
	}
}
