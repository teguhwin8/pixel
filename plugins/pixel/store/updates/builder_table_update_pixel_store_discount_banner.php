<?php namespace Pixel\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePixelStoreDiscountBanner extends Migration
{
    public function up()
    {
        Schema::table('pixel_store_discount_banner', function($table)
        {
            $table->string('text_4')->nullable();
        });
    }
}
