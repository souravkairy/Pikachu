<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;

class SiteSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
            $SiteSetting = SiteSetting::find(1);
            $header = view('backend/admin/elements/_header');
            $sidebar = view('backend/admin/elements/_sidebar');
            $footer = view('backend/admin/elements/_footer');
            $content = view('backend/admin/pages/siteSetting')->with('SiteSetting', $SiteSetting);
            return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
    public function save_site_setting(request $request)
    {
        $SiteSetting = SiteSetting::find(1);
        if ($request->package_buy_charge) {
            $SiteSetting['package_buy_charge'] = $request->package_buy_charge;
            $SiteSetting->save();
        }
        if ($request->withdraw_charge) {
            $SiteSetting['withdraw_charge'] = $request->withdraw_charge;
            $SiteSetting->save();
        }
        if ($request->mobile_number) {
            $SiteSetting['mobile_number'] = $request->mobile_number;
            $SiteSetting['email_id'] = $request->email_id;
            $SiteSetting['facebook'] = $request->facebook;
            $SiteSetting['instagram'] = $request->instagram;
            $SiteSetting['linkedin'] = $request->linkedin;
            $SiteSetting->save();
        }
        if ($request->logo) {
            // $SiteSetting['withdraw_charge'] = $request->withdraw_charge;
            // $SiteSetting->save();
            return redirect()->back();
        }

        return redirect()->back();


    }
}
