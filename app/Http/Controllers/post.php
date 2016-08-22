<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Post as Po;
use Auth;
use App\File;

class post extends Controller
{
    //
	public function post_save(Request $request){
		$po=new Po;
		$f=new File;
		$po->user_id=Auth::user()->id;
		$po->title=$request->title;
		$po->body=$request->body;
		if($request->file("pic")&& $request->file("pic")->isValid()){
			$path="/uploads/";
			$fil=$request->file("pic");
			$nme=$fil->getClientOriginalName();
			if($fil->move($path,$nme)){
				$f->user_id=Auth::user()->id;
				$f->file_name=$nme;
				$f->save();
				$po->file_id=$f->id;
			}
		}
		$po->save();
		return redirect("/admin/view/post");
		
		
		
	}
	public function view_post(){
		$pos=Po::orderBy("created_at","desc")->paginate(10);
		
		foreach($pos as $value){
			$f=File::where("id",$value->file_id)->first();
			echo "<div>";
			echo"<p>".$value->title."</p>";
			if($f){
				echo"<img src='/uploads/'".$f->file_name."/>";
			}
			echo"<p>".$value->body."</p>";
			echo "</div>";
		}
		
	}
}
