<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Payment;
use Illuminate\Http\Response;
use Validator;
use App\Models\Withdraw;
use App\Models\PaymentSetting;


class WithdrawController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth:api');
       // $this->middleware('checkip');
    }

    public function get_payment()
    {
    	$datas=Payment::latest()->get();

    	if (count($datas)>0) 
    	{
    		return response()->json([
	       'data'       =>$datas,
	       'type'          =>"success",
	       'status' =>200,
	       ],Response::HTTP_OK);
            
    	}else
    	{
    		return response()->json([
	       'data'       =>"No Data found",
	       'type'          =>"error",
	       'status' =>404,
	       ],404);
    	}
    	
    }


    public function withdraw(Request $request)
    {

         $user=auth()->user();
                
                if($request->amount<500)
                {
                   return response()->json([
                   'message'       =>"Withdraw amount must be greater than 500",
                   'type'          =>"error",
                   'status' =>200
                   ],Response::HTTP_OK);
                }

                elseif($request->amount >$user->balance) 
                {
        
                   return response()->json([
                   'message'       =>"You have no enough balance",
                   'type'          =>"error",
                   'status' =>200
                   ],Response::HTTP_OK);
                    
                }else
                {
                    $withdraw=new Withdraw();
                    $withdraw->user_id=$user->id;
                    $withdraw->payment_id=$request->payment_id;
                    $withdraw->account_number=$request->account_number;
                    $withdraw->type=$request->type;
                    $withdraw->amount=$request->amount;
                    $withdraw->save();

                    $current_balance=$user->balance;
                    $remain_balance=$current_balance-$request->amount;
                    $user->balance=$remain_balance;
                    $user->save();

                    return response()->json([
                   'message'       =>"Your request has been recored",
                   'type'          =>"success",
                   'status' =>200
                  ],Response::HTTP_OK);
                }

    }


    public function set_self_payment(Request $request)
    {
        $validator = Validator::make($request->all(),[
               'payment_id' =>'required',
               'account_number'=>'required',
         ]);

          if ($validator->fails()) 
           {
                   return response()->json([
                  'message'       =>$validator->errors()->first(),
                  'type'          =>"error",
                  'status' =>422
                  ],Response::HTTP_UNPROCESSABLE_ENTITY);
           }else
           {
                  $user=auth()->user();
                  $check_payment=PaymentSetting::where('user_id',$user->id)
                  ->where('payment_id',$request->payment_id)
                  ->first();
                  if (!is_null($check_payment)) 
                  {

                     $check_payment->user_id=$user->id;
                     $check_payment->payment_id=$request->payment_id;
                     $check_payment->account_number=$request->account_number;
                     $check_payment->save();

                      return response()->json([
                      'message'       =>"Payment setting successfully",
                      'type'          =>"success",
                      'status' =>200
                      ],Response::HTTP_OK);
                     
                    
                  }else
                  {


                     $payment_setting=new PaymentSetting();
                     $payment_setting->user_id=$user->id;
                     $payment_setting->payment_id=$request->payment_id;
                     $payment_setting->account_number=$request->account_number;
                     $payment_setting->save();

                      return response()->json([
                      'message'       =>"Payment setting successfully",
                      'type'          =>"success",
                      'status' =>200
                      ],Response::HTTP_OK);


                  }

           }

      
    }

    public  function get_self_payment()
    {
       $data=PaymentSetting::latest()->get();
       return response()->json(
                [
                'message'       =>$data,
                'type'          =>"success",
                'status' =>200
                ],Response::HTTP_OK);
    }


    public function guard()
    {
        return Auth::guard('api');
    }
}
