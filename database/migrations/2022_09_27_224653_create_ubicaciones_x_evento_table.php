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
        Schema::create('ubicaciones_x_evento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ubicacion_id');
            $table->foreign('ubicacion_id')->references('id')->on('ubicaciones')->onDelete('cascade');
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
        Schema::dropIfExists('ubicaciones_x_evento');
    }
};
