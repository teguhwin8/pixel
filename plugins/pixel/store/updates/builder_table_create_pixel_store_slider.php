<?php namespace Pixel\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePixelStoreSlider extends Migration
{
    public function up()
    {
        Schema::create('pixel_store_slider', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('title_1')->nullable();
            $table->string('title_2')->nullable();
            $table->string('desciption')->nullable();
            $table->string('slogan')->nullable();
            $table->string('button_text')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pixel_store_slider');
    }
}
