<?php namespace Shohabbos\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosReviewsItems extends Migration
{
    public function up()
    {
        Schema::table('shohabbos_reviews_items', function($table)
        {
            $table->integer('sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('shohabbos_reviews_items', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
