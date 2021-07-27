<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoicePrintController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
}
