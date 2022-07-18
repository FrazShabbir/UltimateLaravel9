<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard.dashboard');
    }

    public function siteSettings()
    {
        return view('backend.general.settings');
    }

    public function save_general_settings(Request $request)
    {
        if ($request->site_title) {
            setSettings('site_title', request('site_title'));
        }
        if ($request->short_title) {
            setSettings('short_title', request('short_title'));
        }
        if ($request->copyrights) {
            setSettings('copyrights', request('copyrights'));
        }
        

        if ($request->hasFile('logo')) {

            $request->validate([
                'logo' => 'image|mimes:jpeg,png,jpg|max:1024',
            ]);
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = getRandomString().'-'.time() . '.' . $extension;
            $file->move('uploads/logo', $filename);
            setSettings('logo', 'uploads/logo/'.$filename);
        }
        if ($request->hasFile('favicon')) {

            $request->validate([
                'favicon' => 'image|mimes:jpeg,png,jpg|max:1024',
            ]);

            $file = $request->file('favicon');
            $extension = $file->getClientOriginalExtension();
            $filename = getRandomString().'-'.time() . '.' . $extension;
            $file->move('uploads/favicon', $filename);
            setSettings('favicon', 'uploads/favicon/'.$filename);
        }


        if ($request->email) {
            setSettings('email', request('email'));
        }
        if ($request->phone) {
            setSettings('phone', request('phone'));
        }
        if ($request->address) {
            setSettings('address', request('address'));
        }

        return redirect()->back();
    }

    public function myProfile()
    {
        return view('backend.profile.index');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'username' => 'required|unique:users,username,'.$user->id,
            //'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = User::findOrFail(auth()->user()->id);
        // if(Auth::user()->id!=$user->id){
        //     return redirect()->back()->with('error', 'You are not authorized to perform this action.');
        // }
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->email = $request->email;
        //code to upload picture to server
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $name = time() . '.' . $image->getClientOriginalExtension();
        //     $destinationPath = public_path('/images/users');
        //     $image->move($destinationPath, $name);
        //     $user->image = $name;
        // }
        $user->save();
        alert()->success('Profile Updated Successfully');
        return redirect()->back();
    }    


    
}
