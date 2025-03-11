<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPdfToViajes extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('viajes', function (Blueprint $table) {
            $table->string('pdf')->nullable()->after('meta_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('viajes', function (Blueprint $table) {
            $table->dropColumn('pdf');
        });
    }
}

