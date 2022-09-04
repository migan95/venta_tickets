<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Models\TicketStatus;
use \App\Models\Evento;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->float("costo");
            $table->float("precio");
            $table->text("posicion");
            $table->text("codigo");

            $table->unsignedBigInteger('ticket_status_id');
            $table->foreignIdFor(TicketStatus::class)->constrained()->onDelete('cascade');

            $table->unsignedBigInteger('evento_id');
            $table->foreignIdFor(Evento::class)->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
