<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class UserRoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function UserCreate()
    {
        $admin = DB::table('admins')->where('type',2)->get();
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/adminRole')->with('admin',$admin);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
    public function UserStore(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|unique:admins',
            'name' => 'required',
        ]);

         $data=array();
         $data['name']=$request->name;
         $data['email']=$request->email;
         $data['password']= Hash::make($request->password);
         $data['user']=$request->user;
         $data['withdraw']=$request->withdraw;
         $data['workStation']=$request->workStation;
         $data['wallet']=$request->wallet;
         $data['package']=$request->package;
         $data['commission']=$request->commission;
         $data['setting']=$request->setting;
         $data['type']=2;
         DB::table('admins')->insert($data);
         $notification=array(
                 'messege'=>'Child Admin Create Successfully',
                 'alert-type'=>'success'
                 );
         return Redirect()->back()->with($notification);
    }
    public function UserDelete($id)
    {
        DB::table('admins')->where('id',$id)->delete();
        $notification=array(
                 'messege'=>' Admin Deleted Successfully',
                 'alert-type'=>'error'
                       );
        return Redirect()->back()->with($notification);
    }
}
