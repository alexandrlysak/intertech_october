<?php namespace Intertech\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteIntertechPostsPostsCommentsAnswers extends Migration
{
    public function up()
    {
        Schema::dropIfExists('intertech_posts_posts_comments_answers');
    }
    
    public function down()
    {
        Schema::create('intertech_posts_posts_comments_answers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('commentt_id')->unsigned();
            $table->integer('answer_id')->unsigned();
        });
    }
}
