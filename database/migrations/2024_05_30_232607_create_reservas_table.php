<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora');
            $table->string('estado',50)->nullable();
            $table->unsignedBigInteger('ci_recepcionista');
            $table->unsignedBigInteger('ci_paciente');
            $table->unsignedBigInteger('id_servicio');

            $table->foreign('ci_recepcionista')->references('id')->on('recepcionistas')->onDelete('cascade');
            $table->foreign('ci_paciente')->references('id')->on('pacientes')->onDelete('cascade');
            $table->foreign('id_servicio')->references('id')->on('servicios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
