<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function(blueprint $table){
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('subtitle');
            $table->string('template');
            $table->text('text');
            $table->text('text2');
            $table->text('banner_text');
            $table->string('banner_image_url');
            $table->string('image_url1');
            $table->string('image_url2');
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
        Schema::dropIfExists('pages');
    }
};
