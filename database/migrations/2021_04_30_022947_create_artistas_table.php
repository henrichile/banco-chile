<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artistas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipoArtista');
            $table->string('email');
            $table->string('telefono');
            $table->string('archivo');
            $table->unsignedBigInteger('nota1');
            $table->unsignedBigInteger('jurado1');
            $table->unsignedBigInteger('nota2');
            $table->unsignedBigInteger('jurad2');
            $table->unsignedBigInteger('nota3');
            $table->unsignedBigInteger('jurado3');
            $table->timestamps();

        });

        Schema::create('singles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idArtista');
            $table->string('nombre');
            $table->string('rut');
            $table->string('fechaNacimiento');
            $table->string('colegio');
            $table->string('curso');
            $table->string('autorizacion');
            
            $table->timestamps();

        });

        Schema::create('bandas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idArtista');
            $table->string('nombreBanda');
            $table->string('region');
            $table->string('colegio');
            $table->string('curso');
            $table->string('responsable');
            $table->unsignedBigInteger('participantes');
            $table->timestamps();

        });

        Schema::create('integrantesBanda', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idArtista');
            $table->unsignedBigInteger('idBanda');
            $table->string('nombre');
            $table->string('rut');
            $table->string('fechaNacimiento');
            $table->string('autorizacion');
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
        Schema::dropIfExists('artistas');
    }
}
