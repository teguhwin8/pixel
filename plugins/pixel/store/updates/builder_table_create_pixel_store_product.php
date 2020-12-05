<?php namespace Pixel\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePixelStoreProduct extends Migration
{
    public function up()
    {
        Schema::create('pixel_store_product', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name');
            $table->integer('price');
            $table->string('option')->nullable();
            $table->string('description')->nullable();
            $table->string('video_link')->nullable();
            $table->integer('category_id');
            $table->integer('brand_id')->nullable();
            $table->boolean('is_active');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pixel_store_product');
    }
}
