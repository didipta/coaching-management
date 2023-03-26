<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserinfoosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinfoos', function (Blueprint $table) {
            $table->id();
            $table->string('role',20);
            $table->string('address',200);
            $table->string('phone',20);
            $table->string('Education',20);
            $table->string('gender',20);
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
        Schema::dropIfExists('userinfoos');
    }
}
