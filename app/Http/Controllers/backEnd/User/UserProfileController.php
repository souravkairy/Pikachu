<?php

namespace App\Http\Controllers\backEnd\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index()
    {
        $header = view('backend/user/elements/_header');
        $sidebar = view('backend/user/elements/_sidebar');
        $footer = view('backend/user/elements/_footer');
        $content = view('backend/user/pages/userProfile');
        return view('backend/user/dashboard/index',compact('header','sidebar','footer','content'));
    }
}
