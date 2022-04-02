<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Image;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    

  function __construct(){
   	
    	$this->middleware('auth:admin');
    }
	public function index()
	{
		return view('admin.dashboard');
	}

	public function profile()
	{
		return  view('admin.profile');
	}

	public function change_password(Request $request)
	{

		       $admin=Auth::user();
		    
    		    if ($request->old_password) {
    		      if (Hash::check($request->old_password,$admin->password)) {
    		          if ($request->new_password==$request->password_confirmation) {
    		              $admin->password=Hash::make($request->new_password);
    		                 $admin->save();
    		                 $notification=['alert'=>'error','message'=>'Password Successfully updated','status'=>200];
    		          }else{
    		           $notification=['alert'=>'error','message'=>'Confirm password not match','status'=>500];
    		           
    		          }
    		      }else{
    		          $notification=['alert'=>'error','message'=>'Old Password not match','status'=>500];
    		       // return redirect()->back()->with($notification);
    		      }
    		    } 


    		return json_encode($notification);
	}

	public function update_profile(Request $request)
	{
		$data=Auth::user();

		
    	$data->name=$request->name;
    	$data->phone=$request->phone;

        if ($request->hasFile('avatar')) {
                                              
         if (File::exists(base_path('/assets/backend/profile/'.$data->avatar))) 
         {
             File::delete(base_path('/assets/backend/profile/'.$data->avatar));
         }

           $avatar=$request->avatar;
           $avatar_name=strtolower(Str::random(10)).time().".".$avatar->getClientOriginalExtension();
           $location=base_path('/assets/backend/profile/'.$avatar_name);
           Image::make($avatar)->save($location);

            $data->avatar=$avatar_name;
        }

    	$data->save();
    	$notification=['alert'=>'success','message'=>'Successfully updated','status'=>200];

    	return json_encode($notification);
	}

}
