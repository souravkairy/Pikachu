<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use App\Models\WalletSetting;
use Illuminate\Http\Request;

class WalletSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $wallet = WalletSetting::find(1);
        $header = view('backend/admin/elements/_header');
        $sidebar = view('backend/admin/elements/_sidebar');
        $footer = view('backend/admin/elements/_footer');
        $content = view('backend/admin/pages/walletSetting')
            ->with('wallet', $wallet);
        return view('backend/admin/dashboard/index', compact('header', 'sidebar', 'footer', 'content'));
    }
    public function update_wallet(request $request)
    {
        $validated = $request->validate([
            'wallet_title' => 'required',
            'wallet_address' => 'required',
        ]);
        if ($validated) {
            $id = $request->id;
            $data = WalletSetting::find($id);

            $data['wallet_title'] = $request->wallet_title;
            $data['wallet_address'] = $request->wallet_address;
            $data['created_at'] = date("Y/m/d H:i:s");

            $insert = $data->save();
            if ($insert) {
                return redirect()->back();
            }
        }
    }
}
