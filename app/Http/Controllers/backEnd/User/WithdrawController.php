<?php

namespace App\Http\Controllers\backEnd\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Withdraw;
use App\Models\User;
use App\Models\SiteSetting;

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
        $fetchCharge = SiteSetting::select('withdraw_charge')->first();
        $charge = $fetchCharge->withdraw_charge;
        // print_r($charge);
        // exit();

        if ($validated) {
            $r_balance = $request->remaining_balance;
            $w_amount = $request->withdraw_amount;

            if ($r_balance >= $w_amount &&  $w_amount > 0 ) {
               if ( 20 <= $w_amount) {
                $charge = ($w_amount*$charge)/100;
                $withamn = $w_amount - $charge;

                $data = new Withdraw;
                $data['user_id'] = $request->user_id;
                $data['gross_amount'] = $w_amount;
                $data['withdraw_amount'] = $withamn;
                $data['customer_id'] = $request->customer_id;
                $data['wallet_address'] = $request->wallet_address;
                $today = $data['created_at'] = date("Y/m/d H:i:s");
                $data->save();

                $user_data = User::find($request->user_id);
                $user_data['remaining_balance'] =  $r_balance - $w_amount;
                $user_data['next_withdraw_date'] =  date('Y/m/d H:i:s', strtotime($today . ' +7 day'));
                $insert = $user_data->save();

                if ($insert) {
                    $notification=array(
                        'message'=>'withdraw successfull',
                        'alert-type'=>'success'
                        );
                    return Redirect('user-wallet')->with($notification);
                }
               }
               else {
                $notification=array(
                    'message'=>'minimum Withdraw is 20$',
                    'alert-type'=>'error'
                    );
                return Redirect('user-wallet')->with($notification);
               };
            }
            else{
                $notification=array(
                    'message'=>'Ramaining balance is smaller than withdraw amount',
                    'alert-type'=>'error'
                    );
                return Redirect('user-wallet')->with($notification);
            }


        }
    }
}

