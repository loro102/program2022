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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('file_id')->constrained();
            $table->foreignId('professional_id')->constrained();
            $table->date('fechafact')->required();
            $table->boolean('honorario')->default(false);
            $table->date('fechasupl')->nullable();
            $table->date('fechacontrafact')->nullable();
            $table->string('numfactura')->nullable();
            $table->string('numsuplido')->nullable();
            $table->string('numcontrafactura')->nullable();
            $table->string('descripcion')->nullable();
            $table->boolean('sinoriginal')->nullable();
            $table->string('cuantia_factura')->default('0')->nullable();
            $table->string('cuantia_cliente')->default('0')->nullable();
            $table->string('cuantia_empresa')->default('0')->nullable();
            $table->string('cuantia_indemnizacion')->default('0')->nullable();
            $table->boolean('emitirfactcomision')->nullable();
            $table->boolean('emitirfactporhonorarios')->nullable();
            $table->integer('estadopago')->nullable();
            $table->integer('formapago')->nullable();
            $table->integer('estadocobro')->nullable();
            $table->integer('formacobro')->nullable();
            $table->date('fechapago')->nullable();
            $table->date('fechacobrosuplido')->nullable();
            $table->date('fechacobrocontrafactura')->nullable();
            $table->text('nota')->nullable();
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
        Schema::dropIfExists('invoices');
    }
};
