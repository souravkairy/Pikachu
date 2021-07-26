<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CommisionSetting;

class CommisionsSettingController extends Controller
{
    public function index()
    {
        $commisionsData = CommisionSetting::first();
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/commisionsSetting')
                                ->with('commisionsData',$commisionsData);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
    public function update_commisions(request $request)
    {
        $validated = $request->validate([
            'levelOnePer' => 'required',
            'levelTwoPer' => 'required',
            'levelthreePer' => 'required',
        ]);
        if ($validated) {
            $id = $request->id;
            $data = CommisionSetting::find($id);

            $data['levelOnePer'] = $request->levelOnePer;
            $data['levelTwoPer'] = $request->levelTwoPer;
            $data['levelthreePer'] = $request->levelthreePer;
            $data['created_at'] = date("Y/m/d H:i:s");

            $insert = $data->save();
            if ($insert) {
                return redirect()->back();
            }
        }
    }
}
