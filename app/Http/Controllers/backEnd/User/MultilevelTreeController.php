<?php

namespace App\Http\Controllers\backEnd\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MultilevelTreeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
