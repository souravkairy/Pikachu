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
<<<<<<< HEAD
<<<<<<< HEAD
=======
          //     $user_data['remaining_balance'] =$user_data->remaining_balance + $total_commision;
        //     $user_data->save();
>>>>>>> parent of dd908e0 (remaining balance and withdraw section done slightly)
=======
          //     $user_data['remaining_balance'] =$user_data->remaining_balance + $total_commision;
        //     $user_data->save();
>>>>>>> parent of dd908e0 (remaining balance and withdraw section done slightly)
        $packageData = ActivePackage::where('user_id', $user_id)->where('status', 1)->get();
        $reflink = $user_data->ref_link;
        $level1 = User::where('ref_from', $reflink)->select('ref_link')->get();
        $level2 = User::whereIn('ref_from', $level1)->select('ref_link')->get();
        $level3 = User::whereIn('ref_from', $level2)->select('ref_link')->get();

        $firstLevelIncome = User::where('ref_from', $reflink)->select('ref_commision', 'traiding_bonous')->get();
        $secondLevelIncome = User::whereIn('ref_from', $level1)->select('ref_commision', 'traiding_bonous')->get();
        $thirdLevelIncome = User::whereIn('ref_from', $level2)->select('ref_commision', 'traiding_bonous')->get();

        // if (sizeof($firstLevelIncome) == 0 && sizeof($secondLevelIncome) == 0 && sizeof($thirdLevelIncome) == 0) {
        if (sizeof($thirdLevelIncome) == 0 && sizeof($secondLevelIncome) == 0) {
//first level calculation
            $cTotal1 = 0;
            foreach ($firstLevelIncome as $data) {
                $total = $data->ref_commision + $data->traiding_bonous;
                $cTotal1 += $total;
            }
            $refbns1 = ($cTotal1 * $commisionData->levelOnePer) / 100;
            $total_commision = $refbns1;
            $user_data['ref_commision'] = $total_commision;
            $user_data->save();
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> parent of dd908e0 (remaining balance and withdraw section done slightly)

>>>>>>> parent of dd908e0 (remaining balance and withdraw section done slightly)
        }
        elseif(sizeof($thirdLevelIncome) == 0)
        {
//1st and 2nd level calculation
            $cTotal1 = 0;
            foreach ($firstLevelIncome as $data) {
                $total = $data->ref_commision + $data->traiding_bonous;
                $cTotal1 += $total;

            }
            $refbns1 = ($cTotal1 * $commisionData->levelOnePer) / 100;

            $cTotal2 = 0;
            foreach ($secondLevelIncome as $data) {
                $total = $data->ref_commision + $data->traiding_bonous;
                $cTotal2 += $total;

            }
            $refbns2 = ($cTotal2 * $commisionData->levelTwoPer) / 100;
            $total_commision = $refbns1 + $refbns2;
            $user_data['ref_commision'] = $total_commision;
            $user_data->save();
<<<<<<< HEAD
<<<<<<< HEAD


=======
>>>>>>> parent of dd908e0 (remaining balance and withdraw section done slightly)
=======
>>>>>>> parent of dd908e0 (remaining balance and withdraw section done slightly)
        }
        else{
// al level calculation
            $cTotal1 = 0;
            foreach ($firstLevelIncome as $data) {
                $total = $data->ref_commision + $data->traiding_bonous;
                $cTotal1 += $total;

            }
            $refbns1 = ($cTotal1 * $commisionData->levelOnePer) / 100;

            $cTotal2 = 0;
            foreach ($secondLevelIncome as $data) {
                $total = $data->ref_commision + $data->traiding_bonous;
                $cTotal2 += $total;

            }
            $refbns2 = ($cTotal2 * $commisionData->levelTwoPer) / 100;

            $cTotal3 = 0;
            foreach ($thirdLevelIncome as $data) {

                $total = $data->ref_commision + $data->traiding_bonous;
                $cTotal3 += $total;
            }
            $refbns3 = ($cTotal3 * $commisionData->levelThreePer) / 100;

            $total_commision = $refbns1 + $refbns2 + $refbns3;
            $user_data['ref_commision'] = $total_commision;
            $user_data->save();
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> parent of dd908e0 (remaining balance and withdraw section done slightly)
        // if ($success) {
        //     $user_data['remaining_balance'] =$user_data->remaining_balance + $total_commision;
        //     $user_data->save();
        // }


>>>>>>> parent of dd908e0 (remaining balance and withdraw section done slightly)

        $header = view('backend/user/elements/_header');
        $sidebar = view('backend/user/elements/_sidebar');
        $footer = view('backend/user/elements/_footer');
        $content = view('backend/user/pages/dashboard')->with('activePackages', $packageData)
            ->with('user_data', $user_data)
            ->with('firstLevelIncome', $firstLevelIncome)
            ->with('secondLevelIncome', $secondLevelIncome)
            ->with('thirdLevelIncome', $thirdLevelIncome);
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
