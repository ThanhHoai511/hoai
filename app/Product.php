<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    public function category(){
	  	return $this->belongsTo('App\Category', 'id_cate', 'id');
	}
	
	public function getImage($idProduct)
	{
		$product = Product::find($idProduct);
		$images = $product->image;
		$imgs = json_decode($images);
		
		return $imgs;
	}
}
