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
        Schema::create('association_type_clients', function (Blueprint $table) {
        
            $table->id();
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id')->on('clients')->cascadeOnDelete();
            $table->unsignedBigInteger('id_type_client');
            $table->foreign('id_type_client')->references('id')->on('type_clients')->cascadeOnDelete();
            $table->unsignedBigInteger('id_type_peice_indentite');
            $table->foreign('id_type_peice_indentite')->references('id')->on('type_piece_identites')->cascadeOnDelete();
            $table->timestamps();
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('association_type_clients');
    }
};
