<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ActivePackage;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/dashboard')->with('all_packages',$activePackages);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }

}
