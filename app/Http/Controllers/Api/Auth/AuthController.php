<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
       // $this->middleware('checkip');
    }

    
    public function login(Request $request)
    {
    
            $data=User::where('phone',$request->phone)->first();
            if (!is_null($data)) {
                                    
                  $credentials = $request->only('phone', 'password');
                  if ($token = $this->guard()->attempt($credentials)) {
                      // return $this->respondWithToken($token);
                    return response()->json([
                      'message'=>'Successfully Login',
                      'status' =>200,
                      "type"   =>"success",
                      'access_token'=>$token,
                      'token_type'=>"bearer"
                    ],Response::HTTP_OK);
                  }

                  return response()->json([
                        'message'=>'Credendial did not match',
                        'status' => 401,
                        "type"=>"error",
                        'access_token'=>null,
                        'token_type'=>null
                    ],401);
            
            }else{

                return response()->json([
                    'message'=>'No account is found for this phone',
                    'status'=>403,
                    'type'=>'error',
                    'access_token'=>null,
                    'token_type'=>null
                ],Response::HTTP_FORBIDDEN);
            }
    }

    
    public function me()
    {
        return response()->json([
            'user'=>$this->guard()->user(),
            'type'=>'success',
            'status'=>200
        ],Response::HTTP_OK);
    }

    
    public function logout()
    {
        $this->guard()->logout();
        return response()->json(
                    [
                        'message' => 'Successfully logged out',
                        'type'=>'success',
                        'status' => 200
                     ],
                    Response::HTTP_OK);
    }

    
    public function refresh()
    {
        return $this->respondWithToken($this->guard()->refresh());
    }

    
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => $this->guard()->factory()->getTTL() * 60
        ]);
    }


    
    public function guard()
    {
        return Auth::guard('api');
    }
}
