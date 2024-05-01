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
        Schema::create('assosiation_tarives', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pays');
            $table->foreign('id_pays')->references('id')->on('pays')->cascadeOnDelete();
            $table->unsignedBigInteger('id_tarife');
            $table->foreign('id_tarife')->references('id')->on('tarifs')->cascadeOnDelete();
            $table->string('Taxe_tarife');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assosiation_tarives');
    }
};
