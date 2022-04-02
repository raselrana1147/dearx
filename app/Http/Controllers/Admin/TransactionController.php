<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Transaction;
use Yajra\DataTables\Facades\DataTables;

class TransactionController extends Controller
{
    function __construct()
    {
     	$this->middleware('auth:admin');
     }



    public function datatable()
    {
    	$datas=Transaction::orderBy('id','DESC')->get();
        return DataTables::of($datas)
        ->editColumn('user',function(Transaction $data){
           return $data->user->name;
        })
        ->editColumn('payment',function(Transaction $data){
           return $data->payment->operator_name;
        })
        ->make(true);
    }

    public function index()
    {
        
    	return view('admin.transaction.index');
    }

}
