<?php namespace Intertech\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIntertechPostsCategories extends Migration
{
    public function up()
    {
        Schema::table('intertech_posts_categories', function($table)
        {
            $table->integer('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('intertech_posts_categories', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
