<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\fletes;

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
            $table->integer('valor');
            $table->string('guia');
            $table->integer('bultos');
            $table->integer('volumen');
            $table->integer('folio');
            $table->integer('cantidad');
            $table->integer('viatico');
            $table->integer('comision');
            $table->date('inicio');
            $table->date('termino');
            $table->enum('status',[fletes::ACTIVO,fletes::TERMINADO,fletes::PAGADO])->default(Serie::ACTIVO);

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('origen_id')->nullable();
            $table->unsignedBigInteger('destino_id')->nullable();
            $table->unsignedBigInteger('tipoflete_id')->nullable();
            $table->unsignedBigInteger('tarifa_id')->nullable();
            $table->unsignedBigInteger('descripcion_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('origen_id')->references('id')->on('origenes')->onDelete('set null');
            $table->foreign('destino_id')->references('id')->on('destinos')->onDelete('set null');
            $table->foreign('tipoflete_id')->references('id')->on('tiposflete')->onDelete('set null');
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
