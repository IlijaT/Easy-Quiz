<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('test_id');
            $table->unsignedBigInteger('user_id');
            $table->double('score', 8, 2);

            $table->foreign('test_id')->references('id')->on('tests')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('test_user');
    }
}
