<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! auth()->user()->hasPermissionTo('Read Roles')) {
            abort(403);
        }

        $roles =  Role::with('permissions')->where('role_For', 'Admin')->get();
        return view('backend.roles.index')->withRoles($roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! auth()->user()->hasPermissionTo('Create Roles')) {
            abort(403);
        }
        return view('backend.roles.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! auth()->user()->hasPermissionTo('Create Roles')) {
            abort(403);
        }

        

        $role = Role::create([
            'name'=>$request->name,
            'guard_name'=>'web',
            'role_for'=>'Admin',
        ]);
        $role->syncPermissions($request->permissions);
  
        alert()->success('New Role Added With Permissions Successfully', 'Success');
          
        return redirect()->route('roles.show', $role->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! auth()->user()->hasPermissionTo('Read Roles')) {
            abort(403);
        }
        $role = Role::findOrFail($id);

        //$users = User::hasRole($role->name)->get();
        // dd($role->users);
        return view('backend.roles.show')->withRole($role);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! auth()->user()->hasPermissionTo('Update Roles')) {
            abort(403);
        }
        $role = Role::findOrFail($id);
        return view('backend.roles.edit')->withRole($role);
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
        if (! auth()->user()->hasPermissionTo('Update Roles')) {
            abort(403);
        }
        $role = Role::findOrFail($id);

        $role->name = $request->name;
        $role->save();

     
        $role->syncPermissions($request->permissions);
     
        alert()->success('Role Updated Successfully', 'Success');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! auth()->user()->hasPermissionTo('Delete Roles')) {
            abort(403);
        }

        $role = Role::findOrFail($id);
        $users = User::role($role->name)->get();
        if ($users->count()==0) {
            $role->delete();
            alert()->success("Role Deleted Successfully");

            return redirect()->back();
        } else {
            alert()->warning('You Cannot Delete This Role Because It Is Assigned To Some Users');

            return redirect()->back();
        }
    }
}
