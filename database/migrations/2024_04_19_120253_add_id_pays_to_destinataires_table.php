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
        Schema::table('destinataires', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pays');
            $table->foreign('id_pays')->references('id')->on('pays')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('destinataires', function (Blueprint $table) {
            $table->dropColumn('id_pays');
        });
    }
};
