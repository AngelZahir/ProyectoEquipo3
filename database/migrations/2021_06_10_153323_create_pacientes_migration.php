<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('medicoId')->nullable();
            $table->foreign('medicoId')->references('id')->on('medicos');
            $table->unsignedBigInteger('direccionId');
            $table->foreign('direccionId')->references('id')->on('direcciones');
            $table->string('nombre',20);
            $table->string('ap_paterno',20);
            $table->string('ap_materno', 20)->nullable();
            $table->integer('edad');
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
        Schema::dropIfExists('pacientes');
    }
}
