<?php namespace Intertech\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIntertechPostsPostsComAnswers extends Migration
{
    public function up()
    {
        Schema::create('intertech_posts_posts_com_answers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('commentt_id')->unsigned();
            $table->integer('answer_id')->unsigned();
            $table->primary(['commentt_id','answer_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('intertech_posts_posts_com_answers');
    }
}
