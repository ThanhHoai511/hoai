<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminAddProductRequest;
use App\Http\Requests\AdminEditProductRequest;
use App\Product;
use App\Category;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = Product::all();

    	return view('admin.product.list', ['product' => $prod]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = Category::all();

    	return view('admin.product.add', ['cate' => $cate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminAddProductRequest $request)
    {
        $product = new Product;
    	$product->name = $request->name;
    	$product->size = $request->size;
    	$product->description = $request->description;
    	$product->price = $request->price;
        $files = $request->file('image');
        $filename_arr = [];
        $i = 1;
        foreach ($files as $file){
            $filename = $i . time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('/admin/images'), $filename);
            $filename_arr[] = $filename;
            $i++;
        }
        $product->image = json_encode($filename_arr);
        $product->id_cate = $request->cate;
        $product->is_featured_product = $request->featured;
    	$product->save();
        
        return redirect()->route('listProduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate = Category::all();
        $product = Product::find($id);

        return view('admin.product.edit', ['product' => $product, 'cate' => $cate]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminEditProductRequest $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->size = $request->size;
        $product->description = $request->description;
        $product->price = $request->price;
        if($files = $request->file('image'))
        {
            $filename_arr = [];
            $i =1;
            foreach ($files as $file){
                $filename = $i.time().'.'.$file->getClientOriginalExtension();
                $file->move(public_path('/admin/images'), $filename);
                $filename_arr[] = $filename;
                $i++;
            }
            $product->image = json_encode($filename_arr);
        }
        $product->id_cate = $request->cate;
        $product->is_featured_product = $request->featured;
        $product->save();
        
        return redirect()->route('listProduct');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        
        return redirect()->route('listProduct');
    }
}
