<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserListController extends Controller
{
    public function index()
    {

    }
    public function pending_users()
    {
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/pendingUsers');
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
    public function active_users()
    {
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/activeUsers');
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
}
