<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnsweredUserTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('answered_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('question_id');
            $table->foreign('question_id')->references('id')->on('question');
            $table->unsignedBigInteger('answer_id');
            $table->foreign('answer_id')->references('id')->on('answer');
            $table->unsignedBigInteger('attemp_id');
            $table->foreign('attemp_id')->references('id')->on('attemps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('answered_user');
    }
}
