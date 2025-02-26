<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('slug')->unique(); // URL SEO-friendly
            $table->text('descripcion_corta');
            $table->longText('descripcion_larga');
            $table->string('imagen');
            $table->json('destinos'); // Lista de destinos en JSON
            $table->integer('presupuesto');
            $table->string('actividad');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
