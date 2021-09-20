<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFastParitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fast_parities', function (Blueprint $table) {
            $table->id();
            $table->decimal('green_ratio');
            $table->decimal('violet_ratio');
            $table->decimal('red_ratio');
            $table->decimal('number_ratio');
            $table->integer('duration');
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
        Schema::dropIfExists('fast_parities');
    }
}
