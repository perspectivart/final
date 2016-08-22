<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Allmigrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('users',function (Blueprint $table){
			
			$table->increments("id");
	        $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
		});
		
		
		Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at');
        });
		Schema::create("files",function(Blueprint  $table){
			$table->increments("id");
			$table->integer("user_id")->unsigned();
			$table->foreign("user_id")->references("id")->on("users");
			$table->string("file_name");
			$table->timestamps();
		});
		Schema::create("posts",function(Blueprint  $table){
			$table->increments("id");
			$table->integer("user_id")->unsigned();
			$table->foreign("user_id")->references("id")->on("users");
			$table->text("title");
			$table->text("body");
            $table->integer("file_id")->unsigned()->nullable();
			$table->foreign("file_id")->references("id")->on("files");
			$table->timestamps();
			
		});
		Schema::create("subscribers",function(Blueprint  $table){
			$table->increments("id");
			$table->string("name");
			$table->string("email")->unique();
			$table->timestamps();
		});
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
		 Schema::drop('users');
		 Schema::drop('system_user');
		 Schema::drop('admins');
		 Schema::drop('password_resets');
		 Schema::drop('posts');
		 Schema::drop('files');
		  Schema::drop('subscribers');
    }
}
