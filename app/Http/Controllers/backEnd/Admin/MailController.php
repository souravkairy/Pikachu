<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function contact_inbox()
    {
        echo "cm";
    }
    public function contact_sent()
    {
        echo "cs";
    }
}
