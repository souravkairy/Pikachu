<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkStation;

class WorkStationController extends Controller
{
    public function index()
    {
        $alldata = WorkStation::first();
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/workStation')
                                ->with('alldata',$alldata);
        return view('backend/admin/dashboard/index',compact('header','sidebar','footer','content'));
    }
    public function update_task(request $request)
    {
        $validator = $request->validate([
            'link1' => 'required',
            'link2' => 'required',
            'link3' => 'required',
            'link4' => 'required',
        ]);
        if ($validator) {
            $id = $request->id;
            $data = WorkStation::find($id);
            $data['link1'] = $request->link1;
            $data['link2'] = $request->link2;
            $data['link3'] = $request->link3;
            $data['link4'] = $request->link4;
            $save = $data->save();
            if ($save) {
                return redirect()->back();
            }
        }
    }
}
