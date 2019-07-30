<?php namespace Intertech\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIntertechPostsPostsComments extends Migration
{
    public function up()
    {
        Schema::create('intertech_posts_posts_comments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_id');
            $table->integer('comment_id');
            $table->primary(['post_id','comment_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('intertech_posts_posts_comments');
    }
}
