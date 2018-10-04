<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Slide;
use App\Product;

class CoffeeShopController extends Controller
{
    public function index()
    {
    	$cateParent = Category::where('id_cate', 1)->get();
    	$slide = Slide::where('active', 1)->orderBy('order', 'asc')->get();
    	$feature = Product::where('is_featured_product', 1)->take(6)->get();
    	$product = Product::all();

        return view('client.index', ['cate' => $cateParent, 'slide' => $slide, 'featured' => $feature, 'product' => $product]);
    }
}
