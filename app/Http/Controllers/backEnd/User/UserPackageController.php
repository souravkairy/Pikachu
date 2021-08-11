<?php

namespace App\Http\Controllers\BackEnd\User;

use App\Http\Controllers\Controller;
use App\Models\ActivePackage;
use App\Models\PackageSetting;
use App\Models\WalletSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use Session;

class UserPackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $packageData = PackageSetting::all();
        $header = view('backend/user/elements/_header');
        $sidebar = view('backend/user/elements/_sidebar');
        $footer = view('backend/user/elements/_footer');
        $content = view('backend/user/pages/userPackage')
            ->with('packageData', $packageData);
        return view('backend/user/dashboard/index', compact('header', 'sidebar', 'footer', 'content'));
    }
    public function package_buying_process(request $request)
    {

        $user_id = Auth::id();
        $dd = ActivePackage::find($user_id);
        if ($dd == !null) {
            // $dff = $dd->customer_id;
            // session::put('dff', $dff);
            $walletAddress = WalletSetting::find(1);
            $packageId = $request->id;
            $package_name = $request->package_name;
            $package_price = $request->package_price;
            session::put('packageId', $packageId);
            session::put('package_name', $package_name);
            session::put('package_price', $package_price);
            session::put('userId', $user_id);
        }else{

        $walletAddress = WalletSetting::find(1);
        $packageId = $request->id;
        $package_name = $request->package_name;
        $package_price = $request->package_price;
        session::put('packageId', $packageId);
        session::put('package_name', $package_name);
        session::put('package_price', $package_price);
        session::put('userId', $user_id);


        // session::put('dff', '');

        }
        $header = view('backend/user/elements/_header');
        $sidebar = view('backend/user/elements/_sidebar');
        $footer = view('backend/user/elements/_footer');
        $content = view('backend/user/pages/package_buying_process')->with('walletAddress', $walletAddress);
        return view('backend/user/dashboard/index', compact('header', 'sidebar', 'footer', 'content'));
    }
    public function package_buying_processtwo(request $request)
    {

        $user_id = $request->user_id;
        $packageId = $request->package_id;
        $package_name = $request->package_name;
        $package_price = $request->package_price;
        session::put('packageId', $packageId);
        session::put('package_name', $package_name);
        session::put('package_price', $package_price);
        session::put('userId', $user_id);

        $header = view('backend/user/elements/_header');
        $sidebar = view('backend/user/elements/_sidebar');
        $footer = view('backend/user/elements/_footer');
        $content = view('backend/user/pages/package_buying_process_two');
        return view('backend/user/dashboard/index', compact('header', 'sidebar', 'footer', 'content'));
    }
    public function process_completed(request $request)
    {


        $validated = $request->validate([
            'user_id' => 'required',
            'package_id' => 'required',
            'txnId' => 'required',
            'screen_shot' => 'required',
        ]);
        if ($validated) {

            // echo "<pre>";
            // print_r($request->all());
            // exit();
            $data = new ActivePackage;
            $data['user_id'] = $request->user_id;
            $data['package_id'] = $request->package_id;
            $data['package_name'] = $request->package_name;
            $data['package_price'] = $request->package_price;
            $data['txnId'] = $request->txnId;
            // $data['customer_id'] = $request->dff;
            $data['status'] = 2;
            // $data['screen_shot'] = $request->screen_shot;
            $data['created_at'] = date("Y/m/d H:i:s");
            $fileNameone = $request->file('screen_shot')->getClientOriginalName();
            $fileName1 =  $fileNameone;
            $path = 'screen_shot' . "/" ;
            $destinationPath = $path; // upload path

            $request->file('screen_shot')->move($destinationPath, $fileName1);

            $data['screen_shot'] = '/screen_shot/' . $fileName1;

            $insert = $data->save();
            if ($insert) {
                session::put('packageId', '');
                session::put('package_name', '');
                session::put('package_price', '');
                session::put('userId', '');
                return redirect('/user-wallet');
            }
        }
    }

}
