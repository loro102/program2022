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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',255);
            $table->string('apellidos',255);
            $table->string('nif')->unique();
            $table->string('direccion',255)->nullable();
            $table->string('localidad',255)->nullable();
            $table->string('provincia',255)->nullable();
            $table->string('codigopostal',255)->nullable();
            $table->string('email',255)->unique();
            $table->text('nota')->nullable();
            $table->date('fechanacimiento')->nullable();
            $table->date('alta')->nullable();
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
        Schema::dropIfExists('customers');
    }
};
