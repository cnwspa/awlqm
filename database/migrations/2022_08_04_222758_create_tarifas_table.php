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
        Schema::create('tarifas', function (Blueprint $table) {
            $table->id();
            $table->string('valor');

            $table->unsignedBigInteger('origen_id');
            $table->unsignedBigInteger('destino_id');
            $table->unsignedBigInteger('tipoflete_id');

            $table->foreign('origen_id')->references('id')->on('origenes')->onDelete('set null');
            $table->foreign('destino_id')->references('id')->on('destinos')->onDelete('set null');
            $table->foreign('tipoflete_id')->references('id')->on('tiposflete')->onDelete('set null');
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
        Schema::dropIfExists('tarifas');
    }
};
