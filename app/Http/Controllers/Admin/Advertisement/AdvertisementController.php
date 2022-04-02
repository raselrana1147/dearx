<?php

namespace App\Http\Controllers\Admin\Advertisement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Advertisement;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Database\QueryException;
use Yajra\DataTables\Facades\DataTables;

class AdvertisementController extends Controller
{
    function __construct(){
   	
    	$this->middleware('auth:admin');
    }

    public function datatable()
    {
    	$datas=Advertisement::orderBy('id','DESC')->get();
       

        return DataTables::of($datas)

        ->editColumn('action',function(Advertisement $data){
            return '<a href="'.route('advertisement.edit',$data->id).'" class="btn btn-success btn-sm">
                  <i class="fa fa-edit"></i>
                  </a>
                   <a href="javascript:;" class="btn btn-danger btn-sm delete_item" data-action="'.route('advertisement.delete').'"  item_id="'.$data->id.'">
                   <i class="fa fa-trash"></i>
                  </a>';
        })
       ->rawColumns(['action'])
        ->make(true);
    }

    public function index()
    {
    	return view('admin.advertisement.index');
    }
    public function create()
    {
         return view('admin.advertisement.create');
    }

    public function update(Request $request)
    {
         
          if ($request->isMethod('post'))
        {
            DB::beginTransaction();

            try{

                 $data=Advertisement::findOrFail($request->id);
                 $data->title=$request->title;
                 $data->content=$request->content;
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
         $data=Advertisement::findOrFail($id);
         return view('admin.advertisement.edit',compact('data'));
    }

    public function store(Request $request)
    {
        


        if ($request->isMethod('post'))
        {
            DB::beginTransaction();

            try{

                 $advertisement=new Advertisement();
                 $advertisement->title=$request->title;
                 $advertisement->content=$request->content;
                 $advertisement->save();

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

        public function delete(Request $request){
        
        $data=Advertisement::findOrFail($request->item_id);
        $data->delete();
        $notification=['alert'=>'success','message'=>'Successfully deleted','status'=>200,];
        return json_encode($notification);

    }

}
