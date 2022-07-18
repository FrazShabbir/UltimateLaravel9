<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Designation;
use Illuminate\Support\Facades\Auth;
class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designations = Designation::all();
        return view('backend.designations.index')
        ->withDesignations($designations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.designations.create');
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
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);
        $code = strtoupper(substr($request->name, 0, 3));

        $findcode = Designation::where('code', $code)->first();
        if($findcode){
            $code = $code.'-'.rand(1,99);
        }
        $designation = Designation::create([
            'name'=>$request->name,
            'code'=>$code,
            'description'=>$request->description,
            'created_by'=> Auth::user()->id,
        ]);
        alert()->success('New Designation Added');

        return redirect()->route('designations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $designation = Designation::where('code',$id)->firstOrFail();
        return view('backend.designations.show')
        ->withDesignation($designation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $designation = Designation::where('code',$id)->firstOrFail();
        return view('backend.designations.edit')
        ->withDesignation($designation);
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
              // write update function
              $request->validate([
                'name' => 'required|string|max:255',
                'description'=>'required'
            ]);
    
            $designation = Designation::where('code', $id)->firstOrFail();
            $designation->name = $request->name;
            $designation->description = $request->description;
            $designation->updated_by = Auth::user()->id;
            $designation->save();
            alert()->success('Designation Updated');
            return redirect()->route('designations.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
