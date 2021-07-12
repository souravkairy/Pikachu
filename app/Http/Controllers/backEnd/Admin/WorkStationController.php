<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkStationController extends Controller
{
    public function index()
    {
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/workStation');
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
}
