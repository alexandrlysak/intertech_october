<?php namespace Intertech\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIntertechPostsPostsTags extends Migration
{
    public function up()
    {
        Schema::create('intertech_posts_posts_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->primary(['post_id','tag_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('intertech_posts_posts_tags');
    }
}
