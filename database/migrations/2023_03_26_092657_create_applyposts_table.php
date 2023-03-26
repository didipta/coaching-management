<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplypostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applyposts', function (Blueprint $table) {
            $table->id();
            $table->string('Salary',100);
            $table->string('Time',100);
            $table->unsignedBigInteger('Post_id');
            $table->foreign('Post_id')->references('id')->on('teachingposts');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('userrs');
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
        Schema::dropIfExists('applyposts');
    }
}
