<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDimensionPointTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('dimension_point', function (Blueprint $table) {
            $table->id();
            $table->integer('min_score');
            $table->integer('max_score');
            $table->longtext('recomendations');
            $table->longtext('remark');
            $table->longtext('best_practice');
            $table->longtext('congrats');
            $table->longtext('conclusions');
            $table->unsignedBigInteger('dimension_id');
            $table->foreign('dimension_id')->references('id')->on('dimension');
            $table->unsignedBigInteger('madurity_level_id');
            $table->foreign('madurity_level_id')->references('id')->on('madurity_level');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('dimension_point');
    }
}
