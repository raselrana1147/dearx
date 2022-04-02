<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\admin\Story;
use Illuminate\Http\Response;

class StoryController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:api');
       // $this->middleware('checkip');
    }


    public function get_story($stype)
    {
       $stories=Story::where('type','=',$stype)->get();
		return response()->json([
       'story'       =>$stories,
       'type'          =>"success",
       'status' =>200,
       ],Response::HTTP_OK);
    }

    public function single_story($id)
    {
       $story=Story::findOrFail($id);
		return response()->json([
       'story'       =>$story,
       'type'          =>"success",
       'status' =>200,
       ],Response::HTTP_OK);
    }


    public function guard()
    {
        return Auth::guard('api');
    }
}
