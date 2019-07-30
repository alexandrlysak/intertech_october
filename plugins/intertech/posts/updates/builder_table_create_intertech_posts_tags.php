<?php namespace Intertech\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIntertechPostsTags extends Migration
{
    public function up()
    {
        Schema::create('intertech_posts_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('intertech_posts_tags');
    }
}
