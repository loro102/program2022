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
        Schema::create('oponents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('file_id')->constrained();
            $table->foreignId('processor_id')->constrained();
            $table->string('nombre');
            $table->string('direccion')->nullable();
            $table->string('localidad')->nullable();
            $table->string('provincia')->nullable();
            $table->string('codigo_postal')->nullable();
            $table->string('email')->nullable();
            $table->string('nif')->nullable();
            $table->string('vehiculo')->nullable();
            $table->string('conductor')->nullable();
            $table->string('num_poliza')->nullable();
            $table->string('refexpediente')->nullable();
            $table->string('matricula')->nullable();
            $table->string('propietario')->nullable();
            $table->string('tomador')->nullable();
            $table->text('apunte')->nullable();
            $table->boolean('posible_culpable')->nullable();
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
        Schema::dropIfExists('oponents');
    }
};
