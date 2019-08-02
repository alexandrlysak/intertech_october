<?php namespace Intertech\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIntertechPosts6 extends Migration
{
    public function up()
    {
        Schema::table('intertech_posts_', function($table)
        {
            $table->integer('views')->nullable()->default(0)->change();
            $table->integer('author_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('intertech_posts_', function($table)
        {
            $table->integer('views')->nullable(false)->default(1)->change();
            $table->integer('author_id')->nullable(false)->change();
        });
    }
}
