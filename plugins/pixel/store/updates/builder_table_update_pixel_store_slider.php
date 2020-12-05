<?php namespace Pixel\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePixelStoreSlider extends Migration
{
    public function up()
    {
        Schema::table('pixel_store_slider', function($table)
        {
            $table->string('link')->nullable();
        });
    }
}
