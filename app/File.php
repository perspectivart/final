<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
	protected $fillable = [
         'user_id',"file_name"
    ];
	//link to user
	public function user(){
		return $this->belongsTo("App\User","user_id");
	}
	
	   	//link to post
		public function post(){
		return $this->belongsTo("App\Post","file_id");
	     }
}
