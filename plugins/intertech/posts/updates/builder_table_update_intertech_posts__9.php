<?php namespace Intertech\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIntertechPosts9 extends Migration
{
    public function up()
    {
        Schema::table('intertech_posts_', function($table)
        {
            $table->boolean('is_enabled')->nullable()->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('intertech_posts_', function($table)
        {
            $table->dropColumn('is_enabled');
        });
    }
}
