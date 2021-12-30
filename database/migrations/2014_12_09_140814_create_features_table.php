<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->boolean('elektricni_podizaci_prozora');
            $table->boolean('grijanje_sjedala');
            $table->boolean('hladenje_sjedala');
            $table->boolean('elektricna_sjedala');
            $table->boolean('tempomat');
            $table->boolean('senzor_distance');
            $table->boolean('prepoznavanje_znakova');
            $table->boolean('klima');
            $table->boolean('grijaci_bocnih_ogledala');
            $table->boolean('automatsko_zatvranje_ogledala');
            $table->boolean('zatamnjivanje_retrovizora');
            $table->boolean('zatamnjena_stakla');
            $table->boolean('krovni_prozor');
            $table->boolean('panorama');
            $table->boolean('glasovne_naredbe');
            $table->boolean('elektricni_prtljaznik');
            $table->boolean('straznja_kamera');
            $table->boolean('360');
            $table->boolean('parking_senzori');
            $table->boolean('kozna_sjedala');
            $table->boolean('sportski_ovjes');
            $table->boolean('automatsko_zakljucavanje');
            $table->boolean('alarm');
            $table->boolean('senzor_kise');
            $table->boolean('senzor_tlaka_guma');
            $table->boolean('senzor_umora');
            $table->boolean('navigacija');

            $table->foreignId('type_id')->constrained('types');
            
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
        Schema::dropIfExists('features');
    }
}
