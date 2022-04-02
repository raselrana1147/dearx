<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Payment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Database\QueryException;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Image;
use Illuminate\Support\Facades\File;

class PaymentController extends Controller
{
    
   function __construct(){
   	
    	$this->middleware('auth:admin');
    }

    public function datatable()
    {
    	$datas=Payment::orderBy('id','DESC')->get();
        return DataTables::of($datas)
        ->editColumn('image',function(Payment $data){
            return '<image src="'.asset('assets/backend/payment/'.$data->image).'" style="width:100px;height:60px">';
        })
        ->editColumn('action',function(Payment $data){
            return '<a href="'.route('payment.edit',$data->id).'" class="btn btn-success btn-sm">
                  <i class="fa fa-edit"></i>
                  </a>
                   <a href="javascript:;" class="btn btn-danger btn-sm delete_item" data-action="'.route('payment.delete').'"  item_id="'.$data->id.'">
                   <i class="fa fa-trash"></i>
                  </a>';
        })
       ->rawColumns(['image','action'])
        ->make(true);
    }

    public function index()
    {
        
    	return view('admin.payment.index');
    }
    public function create()
    {
         return view('admin.payment.create');
    }

 

    

    public function store(Request $request)
    {

         $this->validate($request,[
            'image'=>'mimes:jpeg,jpg,png'
        ]);
    
        if ($request->isMethod('post'))
        {
            DB::beginTransaction();

            try{

                 $payment=new Payment();
                 $payment->operator_name=$request->operator_name;
                
                    if ($request->hasFile('image')) 
                    {
                    
                      $image=$request->image;
                      $image_name=strtolower(Str::random(10)).time().".".$image->getClientOriginalExtension();
                       $location=base_path('/assets/backend/payment/'.$image_name);
                       Image::make($image)->save($location);
                       $payment->image=$image_name;
                }
                $payment->save();

                $notification=['alert'=>'success','message'=>'Successfully Added','status'=>200,];
                 DB::commit();
                return json_encode($notification);
            }catch (QueryException $e){
                DB::rollBack();
                $error = $e->getMessage();
                return \response()->json([
                    'error' => $error,
                    'status_code' => 500
                ], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
    }


    public function edit($id)
    {
         $data=Payment::findOrFail($id);
         return view('admin.payment.edit',compact('data'));
    }


    public function update(Request $request)
    {
         

         $this->validate($request,[
                'image'=>'mimes:jpeg,jpg,png'
        ]);
    
        if ($request->isMethod('post'))
        {
            DB::beginTransaction();

            try{

                 $payment=Payment::findOrFail($request->id);
                 $payment->operator_name=$request->operator_name;
                
                    if ($request->hasFile('image')) 
                    {
                        if (File::exists(base_path('/assets/backend/payment/'.$payment->image))) 
                            {
                                File::delete(base_path('/assets/backend/payment/'.$payment->image));
                            }
                    
                      $image=$request->image;
                      $image_name=strtolower(Str::random(10)).time().".".$image->getClientOriginalExtension();
                       $location=base_path('/assets/backend/payment/'.$image_name);
                       Image::make($image)->save($location);
                       $payment->image=$image_name;
                }
                $payment->save();

                $notification=['alert'=>'success','message'=>'Successfully Updated','status'=>200,];
                 DB::commit();
                return json_encode($notification);
            }catch (QueryException $e){
                DB::rollBack();
                $error = $e->getMessage();
                return \response()->json([
                    'error' => $error,
                    'status_code' => 500
                ], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
    }

        public function delete(Request $request){
        
        $data=Payment::findOrFail($request->item_id);

        if (File::exists(base_path('/assets/backend/payment/'.$data->image))) 
        {
            File::delete(base_path('/assets/backend/payment/'.$data->image));
        }
        $data->delete();
        $notification=['alert'=>'success','message'=>'Successfully deleted','status'=>200,];
        return json_encode($notification);

    }


}
