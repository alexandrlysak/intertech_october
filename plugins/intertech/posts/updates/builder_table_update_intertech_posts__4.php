<?php namespace Intertech\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIntertechPosts4 extends Migration
{
    public function up()
    {
        Schema::table('intertech_posts_', function($table)
        {
            $table->integer('views')->nullable()->change();
            $table->integer('author_id')->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('intertech_posts_', function($table)
        {
            $table->integer('views')->nullable(false)->change();
            $table->integer('author_id')->default(NULL)->change();
        });
    }
}
