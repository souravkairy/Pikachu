<?php

namespace App\Http\Controllers\backEnd\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkStation;
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
        $user_data['task_status'] = 2;
        $user_data['traiding_bonous'] = $user_data->traiding_bonous + 10;
        $user_data['remaining_balance'] = $user_data->remaining_balance + 10;
        $insert = $user_data->save();

        // $dd = 3;
        // session::put('dd', $dd);
        if ($insert) {
            return redirect()->back();
        }
    }
}
