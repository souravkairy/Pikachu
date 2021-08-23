<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PackageSetting;

class PackageRateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $packageData = PackageSetting::all();
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/packageRateSetting')
                                ->with('packageData',$packageData);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
    public function save_package(request $request)
    {
        $validated = $request->validate([
            'package_name' => 'required|unique:packages_setting',
            'package_price' => 'required',
        ]);
        if ($validated) {

            $data = new PackageSetting;
            $data['package_name'] = $request->package_name;
            $data['package_price'] = $request->package_price;
            $data['created_at'] = date("Y/m/d H:i:s");

            $insert =  $data->save();
            if ($insert) {
                return redirect()->back();
            }
        }
    }
    public function delete_package($id)
    {
        $flight = PackageSetting::find($id);
        $delete = $flight->delete();
        if ($delete) {
            return redirect()->back();
        }
    }
}
