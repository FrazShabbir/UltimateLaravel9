<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::all();
        return view('backend.slider.index')
        ->with('slides', $slides);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'description' => 'nullable',
           
        ]);

        $slide = new Slide();
        $slide->title = $request->title;
        $slide->description = $request->description;

        if ($request->image) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg|max:1024',
            ]);

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = getRandomString().'-'.time() . '.' . $extension;
            $file->move('uploads/slides', $filename);
            $slide->image = 'uploads/slides/'.$filename;
        }

        // $slide->image = $request->image;
        $slide->save();

        return redirect()->route('slider.index');
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
        return view('backend.slider.edit')
        ->with('slide', $slide);
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
        $request->validate([
            'title' => 'nullable',
            'description' => 'nullable',
           
        ]);

        $slide = Slide::find($id);
        $slide->title = $request->title;
        $slide->description = $request->description;

        if ($request->image) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg|max:1024',
            ]);

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = getRandomString().'-'.time() . '.' . $extension;
            $file->move('uploads/slides', $filename);
            $slide->image = 'uploads/slides/'.$filename;
        }

        // $slide->image = $request->image;
        $slide->save();

        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slide::find($id);
        $slide->delete();
        alert()->success('Success', 'Slide Deleted Successfully');
        return redirect()->route('slider.index');
        
    }
}
