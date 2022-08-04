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
        Schema::create('fletes', function (Blueprint $table) {
            $table->id();
            $table->date('inicio');
            $table->string('guia');
            $table->integer('bultos');
            $table->integer('volumen');
            $table->integer('folio');
            $table->integer('cantidad');
            $table->integer('viatico');
            $table->integer('comision');
            $table->integer('valor');
            $table->date('termino');

            $table->unsignedBigInteger('origen_id');
            $table->unsignedBigInteger('destino_id');
            $table->unsignedBigInteger('tipoflete_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tarifa_id');
            $table->unsignedBigInteger('descripcion_id');

            $table->foreign('origen_id')->references('id')->on('origenes')->onDelete('set null');
            $table->foreign('destino_id')->references('id')->on('destinos')->onDelete('set null');
            $table->foreign('tipoflete_id')->references('id')->on('tiposflete')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('tarifa_id')->references('id')->on('tarifas')->onDelete('set null');
            $table->foreign('descripcion_id')->references('id')->on('descripciones')->onDelete('set null');
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
        Schema::dropIfExists('fletes');
    }
};
