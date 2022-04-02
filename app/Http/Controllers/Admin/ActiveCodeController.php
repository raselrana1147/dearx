<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\ActiveCode;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Database\QueryException;
use Yajra\DataTables\Facades\DataTables;

class ActiveCodeController extends Controller
{
    function __construct(){
     	
      	$this->middleware('auth:admin');
      }


      public function datatable()
    {
    	$datas=ActiveCode::orderBy('id','DESC')->get();
       

        return DataTables::of($datas)

        ->editColumn('action',function(ActiveCode $data){
            return '<a href="'.route('activation_code.edit',$data->id).'" class="btn btn-success btn-sm">
                  <i class="fa fa-edit"></i>
                  </a>
                   <a href="javascript:;" class="btn btn-danger btn-sm delete_item" data-action="'.route('activation_code.delete').'"  item_id="'.$data->id.'">
                   <i class="fa fa-trash"></i>
                  </a>';
        })
       ->rawColumns(['action'])
        ->make(true);
    }

    public function index()
    {
    	return view('admin.code.index');
    }
    public function create()
    {
         return view('admin.code.create');
    }

    public function update(Request $request)
    {
         
          if ($request->isMethod('post'))
        {
            DB::beginTransaction();

            try{

                 $data=ActiveCode::findOrFail($request->id);
                 $data->code=$request->code;
               
                 $data->save();

                $notification=['alert'=>'success','message'=>'Successfully updated','status'=>200,];
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
         $data=ActiveCode::findOrFail($id);
         return view('admin.code.edit',compact('data'));
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'code'=>'unique:active_codes'
    	]);


        if ($request->isMethod('post'))
        {
            DB::beginTransaction();

            try{

                 $code=new ActiveCode();
                 $code->code=$request->code;
                 $code->save();

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

        public function delete(Request $request)
        {
	        $data=ActiveCode::findOrFail($request->item_id);
	        $data->delete();
	        $notification=['alert'=>'success','message'=>'Successfully deleted','status'=>200,];
	        return json_encode($notification);

       }
      
}
