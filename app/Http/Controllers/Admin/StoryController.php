<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Story;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Database\QueryException;
use Yajra\DataTables\Facades\DataTables;

class StoryController extends Controller
{
    

    function __construct(){
   	
    	$this->middleware('auth:admin');
    }

    public function datatable()
    {
    	$datas=Story::orderBy('id','DESC')->get();
      
        return DataTables::of($datas)

        ->editColumn('content',function(Story $data){
            return htmlspecialchars_decode($data->content);
        })
        ->editColumn('type',function(Story $data){
            return ucwords(str_replace("_"," ",$data->type));
        })

        ->editColumn('action',function(Story $data){
            return '<a href="'.route('story.edit',$data->id).'" class="btn btn-success btn-sm">
                  <i class="fa fa-edit"></i>
                  </a>
                   <a href="javascript:;" class="btn btn-danger btn-sm delete_item" data-action="'.route('story.delete').'"  item_id="'.$data->id.'">
                   <i class="fa fa-trash"></i>
                  </a>';
        })
       ->rawColumns(['content','type','action'])
        ->make(true);
    }

    public function index()
    {
    	return view('admin.story.index');
    }
    public function create()
    {
         return view('admin.story.create');
    }

    public function update(Request $request)
    {
         
          if ($request->isMethod('post'))
        {
            DB::beginTransaction();

            try{

                 $data=Story::findOrFail($request->id);
                 $data->title=$request->title;
                 $data->type=$request->type;
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
         $data=Story::findOrFail($id);
         return view('admin.story.edit',compact('data'));
    }

    public function store(Request $request)
    {
        


        if ($request->isMethod('post'))
        {
            DB::beginTransaction();

            try{

                 $story=new Story();
                 $story->title=$request->title;
                 $story->content=$request->content;
                 $story->type=$request->type;
                 $story->save();

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
        
        $data=Story::findOrFail($request->item_id);
        $data->delete();
        $notification=['alert'=>'success','message'=>'Successfully deleted','status'=>200,];
        return json_encode($notification);

    }
}
