<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\ClienteStatus;
use App\Models\ClienteTipo;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('role');



            $table->unsignedBigInteger('cliente_status_id');

            /* si se usa esta forma intenta usar "cliente_statuses" en lugar de "cliente_status"
             $table->foreignIdFor(ClienteStatus::class)->constrained()->onDelete('cascade'); */

            $table->foreign('cliente_status_id')->references('id')->on('cliente_status')->onDelete('cascade');
            $table->foreignIdFor(ClienteTipo::class)->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
