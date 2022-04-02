<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use App\Models\User;
use Image;
use App\Helpers\MobileOTP;
use Validator;
use App\Models\admin\Meta;

class RegisterController extends Controller
{
    
	public function __construct()
	{
	    $this->middleware('guest:api');
      //$this->middleware('checkip');
	}

	public function register(Request $request)
	{
 

         $validator = Validator::make($request->all(),[
                'name'        =>'required|string',
                'phone'       =>'required|unique:users',
                'password'    =>'required|min:4|confirmed',
                'avatar'      =>'nullable|mimes:jpeg,png,jpg',
            ]);

        if ($validator->fails()) {
                        return response()->json([
                       'message'       =>$validator->errors()->first(),
                       'type'          =>"error",
                       'status' =>422
                       ],Response::HTTP_UNPROCESSABLE_ENTITY);
            }else{
                if ($request->isMethod('post')) {

              $user_code="DEX".rand(100000,999990);
              $mobile_otp=rand(10000,99999);

            // if user uses referal code
            if (!empty($request->referal_code)) {

                $parent=User::where('user_code',$request->referal_code)->first();

                if (!is_null($parent)) {

                        $user              =new User();
                        $user->name        =$request->name;
                        $user->phone       =$request->phone;
                        $user->user_code   =$user_code;
                        $user->referal_code=$request->referal_code;
                        $user->coin        =15;
                        $user->mobile_otp  =$mobile_otp;
                        $user->password    =Hash::make($request->password);

                        // parent user commission
                        $parent_current_coin=$parent->coin;
                        $total_coin=$parent_current_coin+10;
                        $parent->coin=$total_coin;
                        $parent->save();

                         // save image
                         if ($request->hasFile('avatar')) {
                                $avatar=$request->avatar;
                                $avatar_name=strtolower(Str::random(10)).time().".".$avatar->getClientOriginalExtension();
                                $location=base_path('/assets/frontend/user_profile/'.$avatar_name);
                                Image::make($avatar)->save($location);
                                $user->avatar=$avatar_name;
                             }

                          $user->save();

                         // $user->mobile_otp=$mobile_otp;
                         // $message="Dear user, your registration has been successfully completed. Please use ".$mobile_otp." OTP code to active your account. RH Cash.";
                         // $to=$request->phone;
                         // MobileOTP::otp($message,$to);

                        return response()->json([
                       'message'=>'Your Registration has been successfully',
                       'type'=>"success",
                       'status'=>200],Response::HTTP_OK);

                }else{

                    return response()->json([
                   'message'=>'No parent user is found for this referal code',
                   "type"=>"error",
                   'status'=>403],Response::HTTP_FORBIDDEN);

                }

            }else{

                // if user not used referal code
                $user              =new User();
                $user->name        =$request->name;
                $user->phone       =$request->phone;
                $user->user_code   =$user_code;
                $user->referal_code=$request->referal_code;
                $user->mobile_otp  =$mobile_otp;
                $user->password    =Hash::make($request->password);

                 // save image
                 if ($request->hasFile('avatar')) {
                        $avatar=$request->avatar;
                        $avatar_name=strtolower(Str::random(10)).time().".".$avatar->getClientOriginalExtension();
                        $location=base_path('/assets/frontend/user_profile/'.$avatar_name);
                        Image::make($avatar)->save($location);
                        $user->avatar=$avatar_name;

                     }

                 $user->save();
                 $user->mobile_otp=$mobile_otp;

                 // $message="Dear user, your registration has been successfully completed. Please use ".$mobile_otp." OTP code to active your account. RH Cash.";

                 // $to=$request->phone;
                 // MobileOTP::otp($message,$to);

                return response()->json([
               'message'        =>'Your Registration has been successful',
               "type"           =>"success",
               'status'  =>200],Response::HTTP_OK);

            }
            
        } 
            }


    	
	}




     public function resend_otp(Request $request){

              $validator = Validator::make($request->all(),[
                 'phone'=>'required',
             ]);

              if ($validator->fails()) {
                  return response()->json([
                  'message'       =>$validator->errors()->first(),
                  'type'          =>"error",
                  'status' =>422
                  ],Response::HTTP_UNPROCESSABLE_ENTITY);
              }else{
                 $user=User::where('phone',$request->phone)->first();
                 if (!is_null($user)) {
                  $mobile_otp=rand(10000,99999);
                 $user->mobile_otp=$mobile_otp;
                 $user->save();

                 $message="Dear user, your have been sent a new OTP code. Please use ".$mobile_otp." OTP code to active your account. Road helper";
                 $to=$request->phone;
                 MobileOTP::otp($message,$to);

                  return response()->json([
                 'message'        =>'Your have been sent a new OTP code.',
                 "type"           =>"success",
                 'status'  =>200],Response::HTTP_OK);
                
                }else{
                     return response()->json([
                    'message'        =>'No account is found for this phone.',
                    "type"           =>"error",
                    'status'  =>403],Response::HTTP_FORBIDDEN);
                    
                }
             }
          
      }

      public  function  verify_phone_number(Request $request){
            

             $validator = Validator::make($request->all(),[
                 'mobile_otp'=>'required',
             ]);

             if ($validator->fails()) {
                 return response()->json([
                  'message'       =>$validator->errors()->first(),
                  'type'          =>"error",
                  'status' =>422
                  ],Response::HTTP_UNPROCESSABLE_ENTITY);
             }else
             {
                 $user=User::where('mobile_otp',$request->mobile_otp)->first();
                if (!is_null($user)){
                    $user->is_active=0;
                    $user->mobile_otp=null;
                    $user->save();
                    return response()->json([
                        'message'=>'Your account is successfully activated',
                        'type'  =>"success",
                        'status'=>200,
                    ],Response::HTTP_OK);

                }else{
                return response()->json([
                    'message'=>'No account is found for this OTP',
                    'type'   =>"error",
                    'status'=>403
                ],Response::HTTP_FORBIDDEN);
              }
             }
           
      }


      public function forget_otp(Request $request){

            
             $validator = Validator::make($request->all(),[
                 'phone'=>'required',
             ]);

             if ($validator->fails()) {
                 return response()->json([
                  'message'       =>$validator->errors()->first(),
                  'type'          =>"error",
                  'status' =>422
                  ],Response::HTTP_UNPROCESSABLE_ENTITY);
             }else
             {
                if ($request->isMethod('post')) {
                $user=User::where('phone',$request->phone)->first();
                if (!is_null($user)) {

                   $mobile_otp=rand(10000,99999);
                   $message="Dear user, your OTP code is ".$mobile_otp.".Please use this OTP code to reset your password";
                   $to=$request->phone;
                   MobileOTP::otp($message,$to);
                    $user->mobile_otp=$mobile_otp;
                    $user->save();
                   return response()->json([
                    'message'=>'We have send an OTP to you phoe number',
                     'type' =>"success",
                    'status'=>200,
                    ],Response::HTTP_OK);
                }else{
                     return response()->json([
                    'message'=>'No account is found',
                    'type' =>"error",
                    'status'=>403
                   ],Response::HTTP_FORBIDDEN);
                }    
            }
             }
      }


      public function forget_password(Request $request){
             

               $validator = Validator::make($request->all(),[
                 'mobile_otp'=>'required',
                 'password'=>'required|min:4'
             ]);

               if ($validator->fails()) {
                   return response()->json([
                    'message'       =>$validator->errors()->first(),
                    'type'          =>"error",
                    'status' =>422
                    ],Response::HTTP_UNPROCESSABLE_ENTITY);
               }else{
                    if ($request->isMethod('post')) {
                        $user=User::where('mobile_otp',$request->mobile_otp)->first();
                        if (!is_null($user)) {

                            $user->password=Hash::make($request->password);
                            $user->mobile_otp=null;
                            $user->save();

                           return response()->json([
                            'message'=>'Your password has been reset successfully',
                            'type'  =>"success",
                            'status'=>200,
                            ],Response::HTTP_OK);

                        }else{
                             return response()->json([
                            'message'=>'No user is found for this OTP',
                            'type'  =>"error",
                            'status'=>403
                           ],Response::HTTP_FORBIDDEN);
                        }    
                    }
                }
      }



      public function systm_maintanace()
      {
        $maintainance=Meta::where('meta_name','maintenance_mode')
        ->pluck('meta_value')->first();

        return response()->json([
                'message'=>$maintainance,
                'type'  =>"success",
                'status'=>200,
              ],Response::HTTP_OK);
       }

}
