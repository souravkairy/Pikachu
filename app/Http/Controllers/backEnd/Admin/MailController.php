<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class MailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function contact_inbox()
    {
        $allMail = Contact::orderByDesc('id')->paginate(10);
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/messageList')
                            ->with('allMail',$allMail);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
    public function view_message($id)
    {
        $message = Contact::find($id);
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/viewMessage')
                            ->with('message',$message);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
    public function contact_sent()
    {
        echo "cs";
    }
}
