<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('question', function (Blueprint $table) {
            $table->id();
            $table->string('statement');
            $table->integer('status')->default(1);
            $table->unsignedBigInteger('form_id');
            $table->foreign('form_id')->references('id')->on('form');
            $table->longText('help_information');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('question');
    }
}
