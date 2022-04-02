<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\File;
use Str;
use Image;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\admin\ActiveCode;

class ProfileController extends Controller
{
    
 public function __construct()
    {
        $this->middleware('auth:api');
        //$this->middleware('checkip');
    }

    public function view_propile()
    {
       $total_referal=User::where('referal_code',auth()->user()->referal_code)->count();
        return response()->json([
            'user'=>auth()->user(),
            'total_referal'=>$total_referal,
            'type'=>'success',
            'status'=>200
        ],Response::HTTP_OK);
    }

    public function update_profile(Request $request)
    {

    	 $validator = Validator::make($request->all(),[
                'name'        =>'required|string',
                'avatar'      =>'nullable|mimes:jpeg,png,jpg',
            ]);

    	   if ($validator->fails()) {
                        return response()->json([
                       'message'       =>$validator->errors()->first(),
                       'type'          =>"error",
                       'status' =>422
                       ],Response::HTTP_UNPROCESSABLE_ENTITY);
            }else{
            	$user=auth()->user();
            	$user->name=$request->name;

            	if ($request->hasFile('avatar')) 
            	{
            		if (File::exists(base_path('/assets/frontend/user_profile/'.$user->avatar))) 
            		{
            		    File::delete(base_path('/assets/frontend/user_profile/'.$user->avatar));
            		}
            	      $avatar=$request->avatar;
            	      $avatar_name=strtolower(Str::random(10)).time().".".$avatar->getClientOriginalExtension();
            	       $location=base_path('/assets/frontend/user_profile/'.$avatar_name);
            	       Image::make($avatar)->save($location);
            	       $user->avatar=$avatar_name;
            	}

            	$user->save();
            	 return response()->json([
            	'message'=>'Your profile updated successfully',
            	'type'=>"success",
            	'status'=>200],Response::HTTP_OK);

            }
    }

    public function change_password(Request $request)
    {
    	$validator = Validator::make($request->all(),[
                'old_password'    =>'required',
                'new_password'    =>'required|min:4',
            ]);

    	if ($validator->fails())
    	{
          return response()->json([
           'message'       =>$validator->errors()->first(),
           'type'          =>"error",
           'status' =>422
           ],Response::HTTP_UNPROCESSABLE_ENTITY);	
    	}
    	else
    	{
    		      $user=auth::user();

                if ($request->old_password) {
                  if (Hash::check($request->old_password,$user->password)) {
                      if ($request->new_password===$request->password_confirmation) {
                          $user->password=Hash::make($request->new_password);
                             $user->save();
                             return response()->json([
                              'data'=>'Password updated successfully',
                              'type'=>"success",
                              'status'=>200],Response::HTTP_OK);
                      }else{
                        return response()->json([
                        'data'=>'Confirm password not match',
                        'type'=>"error",
                        'status'=>410],410);
                       
                      }
                  }else{
                    return response()->json([
                    'data'=>'Old Password not match',
                    'type'=>"error",
                    'status'=>412],412);
                  }
                } 
    	}

    }

    public function get_balance()
    {
       $balance=auth()->user()->balance;

         return response()->json([
         'data'=>$balance,
         'type'=>"success",
         'status'=>200],200);
      }

      public function get_active()
      {
         $active=auth()->user()->is_active;

           return response()->json([
           'message'=>$active,
           'type'=>"success",
           'status'=>200],200);
      }

      public function active_account(Request $request)
      {

        $validator = Validator::make($request->all(),[
            'code'=>'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
             'message'       =>$validator->errors()->first(),
             'type'          =>"error",
             'status' =>422
             ],Response::HTTP_OK);
        }else
        {
            $code=ActiveCode::where('code',$request->code)->first();
           if (!is_null($code)){

               $user=auth()->user();
               $user->is_active=0;
               $user->save();

               return response()->json([
                   'message'=>'Your account is successfully activated',
                   'type'  =>"success",
                   'status'=>200,
               ],Response::HTTP_OK);

           }else{
           return response()->json([
               'message'=>'Code is not exist',
               'type'   =>"error",
               'status'=>403
           ],Response::HTTP_OK);
         }
        }
      }

      public function invalid_click(Request $request)
      {
         $user=auth()->user();
         $user->increment('invalid_click');
         $user->save();

         return response()->json([
         'data'=>"In valid click is count",
         'type'=>"success",
         'status'=>200],200);
      }


    public function guard()
    {
        return Auth::guard('api');
    }


}
