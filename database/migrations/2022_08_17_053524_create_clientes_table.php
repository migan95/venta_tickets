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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->text("nombre");
            $table->text("nit");
            $table->text("dpi");

            $table->unsignedBigInteger('cliente_tipo_id');
            $table->foreign('cliente_tipo_id')->references('id')->on('cliente_tipos')->onDelete('cascade');
            
            $table->float("usuario");
            $table->float("contrasena");
            $table->float("email");

            $table->unsignedBigInteger('cliente_status_id');
            $table->foreign('cliente_status_id')->references('id')->on('cliente_status')->onDelete('cascade');

            $table->float("telefono");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
