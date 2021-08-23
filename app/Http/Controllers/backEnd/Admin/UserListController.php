<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ActivePackage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PackageSetting;
// use App\Models\RefLink;

class UserListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function new_users()
    {
        $newUsers = User::where('status', 2)->get();
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/newUsers')->with('newUsers',$newUsers);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
    public function active_users()
    {
        $activeUsers = User::where('status', 1)->get();
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/activeUsers')->with('activeUsers',$activeUsers);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
    public function view_active_users($id)
    {
        $viewActiveUsers = User::find($id);
        $packDetails = ActivePackage::where('user_id', $id)->get();

        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/viewActiveUsers')
        ->with('viewActiveUsers',$viewActiveUsers)
        ->with('packDetails',$packDetails);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
    public function delete_active_users($id)
    {

        $activeUsers = User::where('status', 1)->get();
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/activeUsers')->with('activeUsers',$activeUsers);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
    public function de_activated_users()
    {
        $deActivatedUsers = User::where('status', 3)->get();
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/deActivatedUsers')->with('deActivatedUsers', $deActivatedUsers);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }

    public function pending_packages()
    {
        $pendingPackages = ActivePackage::where('status', 2)->get();
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/pendingPackages')->with('pendingPackages',$pendingPackages);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
    public function active_packages()
    {
        $activePackages = ActivePackage::where('status', 1)->get();
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/activePackages')->with('activePackages',$activePackages);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
    public function viewSS($id)
    {
        $viewSS = ActivePackage::find($id);

        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/viewSS')->with('viewSS',$viewSS);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
    public function activeUser($user_id, $id)
    {
        $ss = ActivePackage::where('user_id',$user_id)->first();
        if ($ss->customer_id == !NULL) {

            $package_data = ActivePackage::find($id);
            $package_data['status'] = 1;
            $package_data['customer_id'] = $ss->customer_id;
            $insert = $package_data->save();
            $user_data = User::find($user_id);
            $user_data['status'] = 1;
            $user_data->save();
        }
        else{

            $customer_id = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,8);
            $user_data = User::find($user_id);
            $user_data['status'] = 1;
            $user_data['ref_link'] =  $customer_id;
            $user_data->save();

            $package_data = ActivePackage::find($id);
            $package_data['status'] = 1;
            $package_data['customer_id'] = $customer_id;
            $insert = $package_data->save();
        }

        if ($insert) {
            return redirect()->back();
        }

    }
    public function declineUser( $id)
    {
        $delete = ActivePackage::find($id);
        $success = $delete->delete();


        if ($success) {
            return redirect()->back();
        }

    }
    public function de_active_packages()
    {
        $deActivatdPackages = ActivePackage::where('status', 3)->get();
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/deActivatdPackages')->with('deActivatdPackages', $deActivatdPackages);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
}
