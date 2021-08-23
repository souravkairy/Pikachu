<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Withdraw;

class WithdrawController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function pending_withdraw()
    {
        $pendingwithdrawRequest = Withdraw::where('status', 1)->get();
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/pendingwithdrawRequest')->with('pendingwithdrawRequest',$pendingwithdrawRequest);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
    public function view_withdraw($id)
    {
        $viewwithdraw = Withdraw::find($id);
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/viewwithdraw')->with('viewwithdraw',$viewwithdraw);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
    public function view_completed_withdraw($id)
    {
        $completedwithdraw = Withdraw::find($id);
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/completedwithdraw')->with('completedwithdraw',$completedwithdraw);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }


    public function confirm_withdraw(request $request){

        $id = $request->id;
        $update_withdraw_status = Withdraw::find($id);
        $update_withdraw_status['status'] = 3;
        $update_withdraw_status['transection_txnId'] = $request->transection_txnId;
        $update_withdraw_status['updated_at'] = date("Y/m/d H:i:s");
        $success = $update_withdraw_status->save();
        if ($success) {
            $notification=array(
                'message'=>'withdraw successfull',
                'alert-type'=>'success'
                );
            return Redirect('pending-withdraw-list')->with($notification);
        }
        else{
            $notification=array(
                'message'=>'error',
                'alert-type'=>'error'
                );
            return Redirect('pending-withdraw-list')->with($notification);
        }

    }
    public function completed_withdraw()
    {
        $withdrawCompleted = Withdraw::where('status', 3)->get();
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/withdrawCompleted')->with('withdrawCompleted',$withdrawCompleted);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
}
