<?php namespace Intertech\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIntertechPosts10 extends Migration
{
    public function up()
    {
        Schema::table('intertech_posts_', function($table)
        {
            $table->boolean('is_enabled')->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('intertech_posts_', function($table)
        {
            $table->boolean('is_enabled')->default(1)->change();
        });
    }
}
