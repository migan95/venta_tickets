<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->float("precio");
            $table->float("costo");
            $table->string("descripcion");
            $table->string("nombre");
            $table->unsignedBigInteger('ubicaciones_x_evento_id');
            $table->foreign('ubicaciones_x_evento_id')->references('id')->on('ubicaciones_x_evento')->onDelete('cascade');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->foreignIdFor(User::class)->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};
