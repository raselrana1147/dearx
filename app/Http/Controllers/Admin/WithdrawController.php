<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Withdraw;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Database\QueryException;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Admin\Transaction;

class WithdrawController extends Controller
{
   

     function __construct(){
   	
    	$this->middleware('auth:admin');
    }

    public function datatable()
    {
    	$datas=Withdraw::orderBy('id','DESC')->get();
        return DataTables::of($datas)
        ->editColumn('user',function(Withdraw $data){
           return $data->user->name;
        })
        ->editColumn('payment',function(Withdraw $data){
           return $data->payment->operator_name;
        })
        ->editColumn('action',function(Withdraw $data){
            $pending = $data->status == 0 ? 'selected' : '';
            $accept = $data->status == 1 ? 'selected' : '';
            $reject = $data->status == 2 ? 'selected' : '';
           return '<select style="width:130px" class="form-select form-select-solid change_withdraw_status" name="status" item_id="'.$data->id.'" data-action="'.route('change_withdraw_status').'">
                  <option value="0" '.$pending.' >Pending</option>
                  <option value="1" '.$accept.' >Accept</option>
                  <option value="2" '.$reject.' >Reject</option>
             </select>';
        })
       ->rawColumns(['action'])
        ->make(true);
    }

    public function index()
    {
        
    	return view('admin.withdraw.index');
    }
    
    public function withdraw_status(Request $resquest)
    {
         $withdraw=Withdraw::findOrFail($resquest->id);
         $withdraw->status=$resquest->status;
         $withdraw->save();
         if ($resquest->status==2) {

           $user           =$withdraw->user;
           $current_balance=$user->balance;
           $total          =$current_balance+$withdraw->amount;
           $user->balance  =$total;
           $user->save();

         }elseif($resquest->status==1){
              Transaction::create([
                    'user_id'=>$withdraw->user_id,
                    'payment_id'=>$withdraw->payment_id,
                    'amount'=>$withdraw->amount,
                    'account_number'=>$withdraw->account_number,
                    'type'=>$withdraw->type,

                ]);

          }
         $notification=['alert'=>'error','message'=>'Successfully updated','status'=>500];
         return json_encode($notification);
        
    }



}
