<?php

namespace App\Http\Controllers\backEnd\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Withdraw;
use App\Models\User;

class WithdrawController extends Controller
{
    public function withdraw_request(request $request)
    {
        $validated = $request->validate([
            'withdraw_amount' => 'required',
            'user_id' => 'required',
            'customer_id' => 'required',
            'wallet_address' => 'required',
        ]);
        if ($validated) {
            $r_balance = $request->remaining_balance;
            $w_amount = $request->withdraw_amount;

            if ($r_balance >= $w_amount) {
                $charge = ($w_amount*5)/100;
                $withamn = $w_amount - $charge;

                $data = new Withdraw;
                $data['user_id'] = $request->user_id;
                $data['withdraw_amount'] = $withamn;
                $data['customer_id'] = $request->customer_id;
                $data['wallet_address'] = $request->wallet_address;
                $data['created_at'] = date("Y/m/d H:i:s");
                $data->save();

                $user_data = User::find($request->user_id);
                $user_data['remaining_balance'] =  $r_balance - $w_amount;
                $insert = $user_data->save();


                if ($insert) {
                    return redirect('user-wallet');
                }
            }
            else{
                return redirect('user-wallet');
            }


        }
    }
}
