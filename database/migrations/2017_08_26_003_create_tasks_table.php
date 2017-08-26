<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('project')->unsigned();
            $table->integer('assignee')->unsigned();
            $table->integer('creator')->unsigned();
            $table->integer('status')->unsigned();
            $table->dateTime('dueDate');
            $table->timestamps();
        });

        Schema::table('tasks', function (Blueprint $table) {
            $table->foreign('project')->references('id')->on('projects');
            $table->foreign('assignee')->references('id')->on('users');
            $table->foreign('creator')->references('id')->on('users');
            $table->foreign('status')->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
