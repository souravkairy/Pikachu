<?php

namespace App\Http\Controllers\backEnd\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkStation;
use App\Models\ActivePackage;
use App\Models\PackageSetting;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;


class WorkStationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // session::put('dd', '');
        $user_id = Auth::id();
        $user_data = User::find($user_id);
        $dailyWorks = WorkStation::first();
        $header = view('backend/user/elements/_header');
        $sidebar = view('backend/user/elements/_sidebar');
        $footer = view('backend/user/elements/_footer');
        if ($user_data->task_status == 'completed') {
            return view('backend/user/dashboard/index',compact('header','sidebar','footer'));
        }
        $content = view('backend/user/pages/userWorkStation')->with('dailyWorks',$dailyWorks);
        return view('backend/user/dashboard/index',compact('header','sidebar','footer','content'));

    }
    public function update_work_status()
    {
        $user_id = Auth::id();
        $user_data = User::find($user_id);

        $active_packs =  ActivePackage::where('user_id',$user_id)->where('status',1)->select('package_id')->get();
        // echo "<pre>";
        // print_r($active_packs);
        // exit();
        foreach ($active_packs as $item) {
            $pack_id = $item->package_id;
            $pack_data = PackageSetting::where('id',$pack_id)->get();
            foreach ($pack_data as $item) {
                $trading_rate = $item->trading_rate;
                $user_data['task_status'] = 2;
                $user_data['traiding_bonous'] = $user_data->traiding_bonous + $trading_rate;
                $user_data['remaining_balance'] = $user_data->remaining_balance + $trading_rate;
                $user_data->save();
        //         foreach ($active_packs as $data) {
        // //              echo "<pre>";
        // // print_r($data);
        // // exit();
        //        $ff = $data->traiding_balance + 20;
        //             ActivePackage::where('user_id',$user_id)->update(['traiding_balance' => $ff]);
        //         }
            }
        }
        $notification=array(
            'message'=>'Your work is done for today, Thank you',
            'alert-type'=>'success'
            );
        return Redirect('/user-wallet')->with($notification);
        // return redirect('/user-wallet');
    }
}
