<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;

class AdminSlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = Slide::all();

        return view('admin.slide.list', ['slide' => $slide]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slide.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slide = new Slide;
        $image = $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('/admin/slides'), $filename);
        $slide->link = $filename;
        $slide->active = $request->active;
        $slide->order = $request->order;
        $slide->save();
        
        return redirect()->route('listSlide');
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
        $slide = Slide::find($id);

        return view('admin.slide.edit', ['slide' => $slide]);
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
        $slide = Slide::find($id);
        if($image = $request->file('image'))
        {
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/admin/slides'), $filename);
            $slide->link = $filename;
        }
        $slide->active = $request->active;
        $slide->order = $request->order;
        $slide->save();
        
        return redirect()->route('listSlide');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slide::destroy($id);

        return redirect()->route('listSlide');
    }
}
