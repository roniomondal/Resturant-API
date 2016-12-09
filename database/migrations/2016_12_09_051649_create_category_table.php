<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		
		Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('name');            
            $table->string('category')->unique();           
            $table->rememberToken();
            $table->timestamps();
        });
		
		Schema::table('category', function($table){
			$table->boolean('status')->default(0); 
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
		Schema::drop('category');
    }
}
