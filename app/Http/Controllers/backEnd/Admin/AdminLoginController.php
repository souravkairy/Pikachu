<?php

namespace App\Http\Controllers\BackEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function index()
    {

        return view('backend/admin/pages/adminLogin');

    }
}
