<?php namespace Pixel\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePixelStoreCategory extends Migration
{
    public function up()
    {
        Schema::table('pixel_store_category', function($table)
        {
            
            $table->integer('is_active')->default(1)->change();
        });
    }
    
    public function down()
    {
        Schema::table('pixel_store_category', function($table)
        {
           
            $table->integer('is_active')->default(null)->change();
        });
    }
}
