<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Session;

class FrontEndController extends Controller
{
    public function contact_message(request $request)
    {
        $validate = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'message' => 'required',
            ]);
        if ($validate) {
            $data = new Contact;
            $data['name'] = $request->name;
            $data['customer_id'] = $request->customer_id;
            $data['email'] = $request->email;
            $data['message'] = $request->message;
            $data['created_at'] = date("Y/m/d H:i:s");;
            $save = $data->save();
            if ($save) {
                return redirect()->back();
            }
        }
    }

    public function registrationbyref($slug)
    {
        session::put('slug', $slug);
        return view('frontend/registration');
    }
    public function registration()
    {
        session::put('slug','');
        return view('frontend/registration');
    }
}
