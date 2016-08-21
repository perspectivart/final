<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Subscribers;

class MailList extends Controller
{
    //
	public function sub(Request $request){
		$sub=new Subscribers;
		$sub->name=$request->name;
		$sub->email=$request->email;
		$sub->save();
		$sucees=["message"=>"sucessfully added to mailing list"];
		return redirect("/")->with($sucees);
		
		
		
		
	}
}
