<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            
	        $table->string('name', 100);
	        $table->string('slug', 100);
	        $table->text('description')->nullable();
	
	        $table->string('color', 50)->nullable();
	        $table->string('background_path', 100)->nullable();
	        $table->string('background_mode', 100)->nullable();
	
	        $table->integer('position')->nullable();
	        $table->integer('parent_id')->unsigned()->nullable();
	        $table->string('default_sort', 50)->nullable();
	        $table->boolean('is_restricted')->default(0);
	        $table->boolean('is_hidden')->default(0);
	
	        $table->integer('discussions_count')->unsigned()->default(0);
	        $table->dateTime('last_time')->nullable();
	        $table->integer('last_discussion_id')->unsigned()->nullable();
            
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
        Schema::dropIfExists('tags');
    }
}
