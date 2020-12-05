<?php namespace Pixel\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePixelStoreSlider3 extends Migration
{
    public function up()
    {
        Schema::table('pixel_store_slider', function($table)
        {
            $table->string('description', 191)->nullable()->default('null');
        });
    }
    
    public function down()
    {
        Schema::table('pixel_store_slider', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
