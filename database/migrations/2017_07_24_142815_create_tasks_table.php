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
            $table->string('title');
            $table->boolean('confirmed');
            $table->timestamps();

            //$table->integer('categorie_id')->unsigned();
            //$table->foreign('categorie_id')->references('id')->on('categories');
        });

        // Schema::table('tasks', function(Blueprint $table)
        // {
        //   $table->foreign('categorie_id')->references('id')->on('categories');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('tasks');
        Schema::dropIfExists('categories');
    }
}
