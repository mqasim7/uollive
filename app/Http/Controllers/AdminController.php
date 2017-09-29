<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Admin;
use Image;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function profile($id)
    {
        $admin=Admin::findOrFail($id);
        return view('admin/profile', compact('admin'));
    }

    public function uploadProfile(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);

        $image = $request->file('filename');
        $file = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('uploads/profileimages/' . $file);
        Image::make($image)->save($location);

        $admin->profileimage = $file;
        $admin->save();

        return view('admin/profile', compact('admin'));
    }

    public function tableList($id)
    {
        $admin=Admin::findOrFail($id);
        $categories=Category::paginate(2);


        return view('admin/tablelist', compact('admin','categories'));
    }

}
