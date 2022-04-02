<?php 
	use Illuminate\Support\Facades\Auth;
function myName(){
	return Auth::user()->name;
}