<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Advertisement;
use App\Models\admin\Meta;
use App\Models\PackageSeen;
use Illuminate\Http\Response;
class WorkController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:api');
        //$this->middleware('checkip');
    }

    public function get_work()
    {

    	  // $per_page=Meta::where('meta_name','paginate')->pluck('meta_value')->first();
       //  $work_limit=Meta::where('meta_name','work_limit')->pluck('meta_value')->first();
       //  $user=auth()->user();

       // if ($user->today_earn<$work_limit) 
       // {
       //   $seen_work=PackageSeen::where('user_id',$user->id)->first();
       //   $works="";
       //   $paginate=Advertisement::inRandomOrder()->paginate($per_page);
       //   $paginate_json=json_encode($paginate);

       //   $paginate_decode=json_decode($paginate_json,true);
         
       //   $last_page=$paginate_decode['last_page'];
       //   $last_page=$paginate_decode['last_page'];
       //   $total_row=$paginate_decode['total'];
         
       //   if (!is_null($seen_work)) 
       //   {

       //       if ($seen_work->current_page<$seen_work->last_page) 
       //       {
       //          $works=Advertisement::inRandomOrder()
       //          ->paginate($per_page,['*'],"page",$seen_work->next_page);

       //          $seen_work->current_page=$seen_work->current_page+1;
       //          $seen_work->next_page   =$seen_work->next_page+1;
       //          $seen_work->last_page   =$last_page;
       //          $seen_work->per_page    =$per_page;
       //          $seen_work->total_row   =$total_row;
       //          $seen_work->save();
       //       }else
       //       {
       //        $seen_work->delete();

       //        $works=Advertisement::inRandomOrder()
       //        ->paginate($per_page);
              
       //        $package              =new PackageSeen();
       //        $package->current_page=2;
       //        $package->user_id     =$user->id;
       //        $package->current_page=1;
       //        $package->next_page   =2;
       //        $package->last_page   =$last_page;
       //        $package->per_page    =$per_page;
       //        $package->total_row   =$total_row;
       //        $package->save();
       //      }
             
            
       //   }
       //   else
       //   {
       //       $works=Advertisement::inRandomOrder()
       //       ->paginate($per_page);

       //       $package              =new PackageSeen();
       //       $package->current_page=2;
       //       $package->user_id     =$user->id;
       //       $package->current_page=1;
       //       $package->next_page   =2;
       //       $package->last_page   =$last_page;
       //       $package->per_page    =$per_page;
       //       $package->total_row   =$total_row;
       //       $package->save();
       //   }

       //    return response()->json([
       //      'data'       =>$works,
       //      'type'          =>"success",
       //      'status' =>200,
       //      ],Response::HTTP_OK);

       // }else{
       //        return response()->json([
       //        'data'       =>"Yor working Limit has been finsihed for today",
       //        'type'          =>"error",
       //        'status' =>401,
       //        ],Response::HTTP_OK);
       //  }


            $per_page=Meta::where('meta_name','paginate')->pluck('meta_value')->first();
            $works=Advertisement::inRandomOrder()->take($per_page)->get();
        
            return response()->json([
            'data'       =>$works,
            'type'          =>"success",
            'status' =>200,
            ],Response::HTTP_OK);  

    }


    public function working_wage(){

            $wage      =Meta::where('meta_name','work_wage')->pluck('meta_value')->first();
            $work_limit=Meta::where('meta_name','work_limit')->pluck('meta_value')->first();
            $user      =auth()->user();
            if ($user->today_earn<$work_limit) {

                $current_balance =$user->balance;
                $total_balance   =$current_balance+$wage;
                $user->balance   =$total_balance;

                $current_earn    =$user->today_earn;

                $will_added=$work_limit-$user->today_earn;

                if ($will_added>$wage)
                {
                  $total_earn      =$current_earn+$wage;
                  $user->today_earn=$total_earn;

                }else
                 {
                    $total_earn=$current_earn+$will_added;
                    $user->today_earn=$total_earn;
                 }

                $user->save();

              return response()->json([
              'data'   =>"Working wage added successfully",
              'type'   =>"success",
              'status' =>200,
              ],Response::HTTP_OK);

            }else{

              return response()->json([
              'data'   =>"Yor working Limit has been finsihed for today",
              'type'   =>"success",
              'status' =>401,
              ],Response::HTTP_OK);
            }
           
            
    }


    public function guard()
    {
        return Auth::guard('api');
    }
}
