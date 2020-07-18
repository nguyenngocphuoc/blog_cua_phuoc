<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('re_works', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('details');
            $table->string('image');
            $table->integer('category_id');
            $table->boolean('status');
            $table->boolean('featured');
            $table->integer('view_count')->default(0);
            $table->integer('video_id');
            $table->string('work_address');
            $table->string('deadline_for_sub');
            $table->string('salary');
            $table->integer('emp_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('re_works');
    }
}
  