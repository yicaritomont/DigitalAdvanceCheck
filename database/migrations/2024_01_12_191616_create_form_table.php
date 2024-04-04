<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longtext('description');
            $table->integer('status')->default(1);
            $table->unsignedBigInteger('dimension_id');
            $table->foreign('dimension_id')->references('id')->on('dimension');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('form');
    }
}
