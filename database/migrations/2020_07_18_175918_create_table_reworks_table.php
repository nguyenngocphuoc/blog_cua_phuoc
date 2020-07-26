<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('reworks')) {
 
            Schema::create('reworks', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->string('slug');
                $table->text('details');
                $table->string('image');
                $table->integer('category_id');
                $table->boolean('status');
                $table->integer('view_count')->default(0);
                $table->string('work_address');
                $table->string('deadline_for_sub');
                $table->string('salary');
                $table->integer('emp_total');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reworks');
    }
}
