<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
	protected $fillable = [
         'user_id',"title","body","file_id"
    ];
	//link to usser
	public function user(){
		return $this->belongsTo("App\User");
	}
	//link to file
	public function files(){
		return $this->hasOne("App\File","file_id");
	}
	
}
