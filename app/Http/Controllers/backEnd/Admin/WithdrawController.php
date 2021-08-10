<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Withdraw;

class WithdrawController extends Controller
{
    public function pending_withdraw()
    {
        $pendingwithdrawRequest = Withdraw::where('status', 1)->get();
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/pendingwithdrawRequest')->with('pendingwithdrawRequest',$pendingwithdrawRequest);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
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
