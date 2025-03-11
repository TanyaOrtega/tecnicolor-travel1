<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('viaje_id')->constrained()->onDelete('cascade');
            $table->string('nombre');
            $table->string('email');
            $table->string('telefono')->nullable();
            $table->integer('personas');
            $table->decimal('anticipo', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservas');
    }
};
