<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Slide;
use App\Product;
use App\Comment;

class CoffeeShopController extends Controller
{
    public function index()
    {
    	$cate = Category::where('id_cate', 1)->get();
    	$slide = Slide::where('active', 1)->orderBy('order', 'asc')->get();
    	$feature = Product::where('is_featured_product', 1)->take(6)->get();
    	$product = Product::all();

        return view('client.index', ['cate' => $cate, 'slide' => $slide, 'featured' => $feature, 'product' => $product]);
    }

    public function detail($id)
    {
    	$cate = Category::where('id_cate', 1)->get();
        $product = Product::findOrFail($id);
        $comment = Comment::where('id_product', $id)->get();

    	return view('client.detail', ['cate' => $cate, 'product' => $product, 'comment' => $comment]);
    }

    public function comment(Request $request)
    {
        $comment = new Comment();
        $comment->id_user = $request->id_user;
        $comment->id_product = $request->id_product;
        $comment->comment = $request->comment;
        $comment->save();

        return redirect()->route('detail', [$comment->id_product]);        
    }

    public function category(Request $request, $id)
    {
        $cate = Category::where('id_cate', 1)->get();
        $pro = 8;
        $order = 'asc';
        if (isset($_GET['btn'])) {
            $pro = $request->get('pro');
            $order = $request->get('order');
        }
        $product = Product::where('id_cate', $id)->orderBy('price', $order)->paginate($pro);

        return view('client.product', ['cate' => $cate, 'product'=> $product, 'numberprod' => $pro, 'order' => $order]);
    }
}
