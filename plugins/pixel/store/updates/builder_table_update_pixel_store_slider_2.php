<?php namespace Pixel\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePixelStoreSlider2 extends Migration
{
    public function up()
    {
        Schema::table('pixel_store_slider', function($table)
        {
            $table->boolean('is_active')->default(1);
        });
    }
}
