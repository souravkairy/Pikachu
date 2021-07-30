<?php

namespace App\Http\Controllers\backEnd\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ActivePackage;
use App\Models\RefLink;
use App\Models\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $user_id = Auth::id();
        $user_data = User::find($user_id);
        $packageData = ActivePackage::where('user_id',$user_id)->where('status',1)->get();
        $refData = RefLink::where('user_id',$user_id)->first();
        $header = view('backend/user/elements/_header');
        $sidebar = view('backend/user/elements/_sidebar');
        $footer = view('backend/user/elements/_footer');
        $content = view('backend/user/pages/dashboard')->with('activePackages',$packageData)->with('refData',$refData)->with('user_data',$user_data);
        return view('backend/user/dashboard/index',compact('header','sidebar','footer','content'));
    }
    public function update_wallet_address(request $request)
    {
        $user_id = Auth::id();
        $user_data = User::find($user_id);
        $user_data['wallet_address'] = $request->wallet_address;
        $insert = $user_data->save();

        if ($insert) {
            return redirect()->back();
        }

    }
}
