<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('naziv_modela', 50);
            $table->integer('godina_proizvodnje');
            $table->integer('broj_sjedala');
            $table->integer('snaga');
            $table->integer('obujam_motora');
            $table->string('vrsta_motora', 50);
            $table->string('boja', 50);
            $table->integer('prijedeni_km');
            $table->string('vrsta_mjenjaca', 50);

            $table->foreignId('manufacturers_id')->constrained('manufacturers');
            /* created_at, update_at */
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
        Schema::dropIfExists('types');
    }
}
