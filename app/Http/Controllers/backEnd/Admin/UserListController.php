<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ActivePackage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PackageSetting;
use App\Models\RefLink;

class UserListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function new_users()
    {
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/newUsers');
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }

    public function pending_users()
    {
        $pendingUsers = ActivePackage::where('status', 2)->get();
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/pendingUsers')->with('pendingUsers',$pendingUsers);
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
        $customer_id = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,8);
        $user_data = User::find($user_id);
        $user_data['status'] = 1;
        $user_data['ref_link'] =  $customer_id;
        $user_data->save();


        $package_data = ActivePackage::find($id);
        $package_data['status'] = 1;
        $package_data['customer_id'] = $customer_id;
        $package_data->save();

        $ref_data = new RefLink;
        $ref_data['user_id'] = $user_id;
        $ref_data['ref_link'] = $generateRef = "https://$_SERVER[HTTP_HOST]/registration/". $customer_id;
        $insert =  $ref_data->save();

        if ($insert) {
            return redirect()->back();
        }

    }
    public function active_users()
    {
        $activeUsers = ActivePackage::where('status', 1)->get();
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/activeUsers')->with('activeUsers',$activeUsers);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }

}
