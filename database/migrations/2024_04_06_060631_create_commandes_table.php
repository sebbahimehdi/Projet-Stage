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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->integer('poids_commande');
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id')->on('clients')->cascadeOnDelete();
            $table->unsignedBigInteger('id_destinataire');
            $table->foreign('id_destinataire')->references('id')->on('destinataires')->cascadeOnDelete();
            $table->date('date_validation');
            $table->string('taxe_commande');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
