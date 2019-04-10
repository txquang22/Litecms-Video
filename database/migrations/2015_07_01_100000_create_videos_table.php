<?php

use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: videos
         */
        Schema::create('videos', function ($table) {
            $table->increments('id');
            $table->string('v_id', 200)->nullable();
            $table->string('name', 250)->nullable();
            $table->tinyInteger('status')->nullable();
            $table->integer('view_count')->nullable();
            $table->string('duration', 100)->nullable();
            $table->string('file', 250)->nullable();
            $table->text('uploaded_by')->nullable();
            $table->string('slug', 100)->nullable();
            $table->integer('user_id')->nullable();
            $table->string('upload_folder', 100)->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */

    public function down()
    {
        Schema::drop('videos');
    }
}
