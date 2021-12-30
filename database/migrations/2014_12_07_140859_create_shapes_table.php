<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShapesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shapes', function (Blueprint $table) {
            $table->id();
            $table->boolean('sedan');
            $table->boolean('suv');
            $table->boolean('karavan');
            $table->boolean('kabriolet');
            $table->boolean('kupe');
            $table->foreignId('type_id')->constrained('types');
            $table->timestamps();
            /* created_at, update_at */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shapes');
    }
}
