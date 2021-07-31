<?php

namespace App\Http\Controllers\backEnd\User;

use App\Http\Controllers\Controller;
use App\Models\ActivePackage;
use App\Models\CommisionSetting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $commisionData = CommisionSetting::find(1);
        $user_id = Auth::id();
        $user_data = User::find($user_id);
        $packageData = ActivePackage::where('user_id', $user_id)->where('status', 1)->get();
        $reflink = $user_data->ref_link;
        $level1 = User::where('ref_from', $reflink)->select('ref_link')->get();
        $level2 = User::whereIn('ref_from', $level1)->select('ref_link')->get();
        $level3 = User::whereIn('ref_from', $level2)->select('ref_link')->get();

        $level1Count = $level1->count();
        $level2Count = $level1->count();
        $level3Count = $level1->count();

        $firstLevelIncome = User::whereIn('ref_link', $level1)->select('ref_commision', 'traiding_bonous')->get();
        $secondLevelIncome = User::whereIn('ref_link', $level2)->select('ref_commision', 'traiding_bonous')->get();
        $thirdLevelIncome = User::whereIn('ref_link', $level3)->select('ref_commision', 'traiding_bonous')->get();
// echo "<pre>";
        //         print_r($firstLevelIncome);
        //         exit();

        // if (sizeof($firstLevelIncome) == 0 && sizeof($secondLevelIncome) == 0 && sizeof($thirdLevelIncome) == 0) {

        foreach ($firstLevelIncome as $data) {
            $total = $data->ref_commision + $data->traiding_bonous;
            $aa = $total;
            $ab = $aa + $total;
        }
        $refbns1 = ($ab * $commisionData->levelOnePer) / 100;
        foreach ($secondLevelIncome as $data) {

            $total = $data->ref_commision + $data->traiding_bonous;
            $aa = $total;
            $bc = $aa + $total;
        }
        $refbns2 = ($bc * $commisionData->levelTwoPer) / 100;
        foreach ($thirdLevelIncome as $data) {

            $total = $data->ref_commision + $data->traiding_bonous;
            $aa = $total;
            $cd = $aa + $total;
        }
        $refbns3 = ($cd * $commisionData->levelThreePer) / 100;

        $total_commision = $refbns1 + $refbns2 + $refbns3;
        $user_data['ref_commision'] = $total_commision;
        $user_data->save();
        $header = view('backend/user/elements/_header');
        $sidebar = view('backend/user/elements/_sidebar');
        $footer = view('backend/user/elements/_footer');
        $content = view('backend/user/pages/dashboard')->with('activePackages', $packageData)->with('user_data', $user_data);
        return view('backend/user/dashboard/index', compact('header', 'sidebar', 'footer', 'content'));
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
    public function downline_memebers()
    {
        $user_id = Auth::id();
        $user_data = User::find($user_id);

        $reflink = $user_data->ref_link;
        $level1 = User::where('ref_from', $reflink)->select('ref_link')->get();
        $level2 = User::whereIn('ref_from', $level1)->select('ref_link')->get();
        $level3 = User::whereIn('ref_from', $level2)->select('ref_link')->get();

        // echo "<pre>";
        // print_r($level2);
        // exit();

        $header = view('backend/user/elements/_header');
        $sidebar = view('backend/user/elements/_sidebar');
        $footer = view('backend/user/elements/_footer');
        $content = view('backend/user/pages/dowlineMembers')->with('level1', $level1)->with('level2', $level2)->with('level3', $level3);
        return view('backend/user/dashboard/index', compact('header', 'sidebar', 'footer', 'content'));
    }
}
