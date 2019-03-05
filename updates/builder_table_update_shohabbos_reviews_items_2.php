<?php namespace Shohabbos\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosReviewsItems2 extends Migration
{
    public function up()
    {
        Schema::table('shohabbos_reviews_items', function($table)
        {
            $table->integer('sort_order')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('shohabbos_reviews_items', function($table)
        {
            $table->integer('sort_order')->nullable(false)->change();
        });
    }
}
