<?php namespace Rebel59\Team\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMembersTable extends Migration
{
    public function up()
    {
        Schema::create('rebel59_team_members', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('function')->nullable();
            $table->text('description')->nullable();
            $table->text('socials')->nullable();

            $table->string('photo')->nullable();
            $table->string('cover')->nullable();

            $table->boolean('published')->default(false);
            $table->timestamp('published_at')->nullable();

            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rebel59_team_members');
    }
}
