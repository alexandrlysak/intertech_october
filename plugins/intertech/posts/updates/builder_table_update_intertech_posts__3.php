<?php namespace Intertech\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIntertechPosts3 extends Migration
{
    public function up()
    {
        Schema::table('intertech_posts_', function($table)
        {
            $table->integer('author_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('intertech_posts_', function($table)
        {
            $table->dropColumn('author_id');
        });
    }
}
