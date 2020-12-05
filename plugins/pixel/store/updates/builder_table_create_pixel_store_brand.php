<?php namespace Pixel\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePixelStoreBrand extends Migration
{
    public function up()
    {
        Schema::create('pixel_store_brand', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->string('website_url')->nullable();
            $table->boolean('is_active')->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pixel_store_brand');
    }
}
