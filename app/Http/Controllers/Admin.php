<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Password;

use App\Http\Requests;
use Validator;
use App\User;
use App\Post;
use Auth;
use App\File;

class Admin extends Controller
{
    //
	public function showlog(){
		
		return view("admin.homepage_admin");
	}
	public function setpass(){
		return view("admin.adminreg");
		
	}
	public function save_details(Request $request){
		$va=Validator::make($request->all(),['email'=>'required','password'=>'required|confirmed|min:6'] );
		if($va->fails()){
			echo"failed validation";
		}
		else{
			
	    $admin=new User;
		$admin->email=$request->email;
		$admin->password=bcrypt($request->password);
		$admin->save();
		return redirect("/admin/home");
		}
		
		
	}
	
	
}
