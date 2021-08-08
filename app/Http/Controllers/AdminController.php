<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\ActivePackage;
use App\Models\User;
use App\Models\PackageSetting;
use App\Models\Withdraw;
use App\Models\Contact;
class AdminController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $contactMessage = Contact::all();
        $withdraw = Withdraw::sum('withdraw_amount');
        $totalActivePackageAmount = ActivePackage::sum('package_price');
        $activePackages = ActivePackage::count('id');
        $pendingUsers = ActivePackage::where('customer_id', '')->count('id');
        $newUser = User::where('status',2)->count('id');
        // $header = view('backend/admin/elements/_header')->with('contactMessage',$contactMessage);
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/dashboard')->with('activePackages',$activePackages)
        ->with('pendingUsers',$pendingUsers)->with('newUser',$newUser)
        ->with('totalActivePackageAmount',$totalActivePackageAmount)
        ->with('withdraw',$withdraw);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }

    public function ChangePassword()
    {
        return view('admin.auth.passwordchange');
    }

    public function Update_pass(Request $request)
    {
      $password=Auth::user()->password;
      $oldpass=$request->oldpass;
      $newpass=$request->password;
      $confirm=$request->password_confirmation;
      if (Hash::check($oldpass,$password)) {
           if ($newpass === $confirm) {
                      $user=Admin::find(Auth::id());
                      $user->password=Hash::make($request->password);
                      $user->save();
                      Auth::logout();
                      $notification=array(
                        'message'=>'Password Changed Successfully ! Now Login with Your New Password',
                        'alert-type'=>'success'
                         );
                       return Redirect()->route('admin.login')->with($notification);
                 }else{
                     $notification=array(
                        'message'=>'New password and Confirm Password not matched!',
                        'alert-type'=>'error'
                         );
                       return Redirect()->back()->with($notification);
                 }
      }else{
        $notification=array(
                'message'=>'Old Password not matched!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
      }
    }

    public function logout()
    {
        Auth::logout();
        $notification=array(
            'message'=>'Successfully Logout',
            'alert-type'=>'success'
             );
         return Redirect()->route('admin.login')->with($notification);
    }

}
