<?php namespace Pixel\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePixelStoreProduct extends Migration
{
    public function up()
    {
        Schema::table('pixel_store_product', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('pixel_store_product', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
