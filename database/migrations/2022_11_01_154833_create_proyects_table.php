<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyects', function (Blueprint $table) {
            $table->id();
            $table->string('departamento');
            $table->string('tipo_de_turismo')->nullable();
            $table->string('nombre');
            $table->string('estado')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('logo')->default('default_logo.png');
            $table->string('foto_portada')->nullable('default_portada.png');
            $table->string('contacto')->nullable();
            $table->string('telefono')->nullable();
            $table->string('localizacion')->nullable();
            $table->string('website')->nullable();
            $table->string('correo')->nullable();
            $table->string('rnt')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyects');
    }
};
