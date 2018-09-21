<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Category;

use Illuminate\Database\Eloquent\Collection;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate = Category::all();
        return view('admin.category.list', ['cate' => $cate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = Category::all();

        return view('admin.category.add', ['cate' => $cate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'name' => 'bail|required|unique:category,name',
        ]);

        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }
        $cate = new Category;
        $cate->name = $request->catename;
        $cate->id_cate = $request->cate;
        $cate->save();

        $c = Category::all();
        return view('admin.category.list', ['cate' => $c]);
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
        $cate = Category::find($id);

        $allcate = Category::all();
        return view('admin.category.edit', ['cate' => $cate, 'allcate' => $allcate]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), 
        [
            'name' => 'bail|required|unique:category,name',
        ]);

        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }
        $cate = Category::find($id);
        $cate->name = $request->catename;
        $cate->save();
        $c = Category::all();
        return view('admin.category.list', ['cate' => $c]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        $c = Category::all();
        return view('admin.category.list', ['cate' => $c]);
    }
}
