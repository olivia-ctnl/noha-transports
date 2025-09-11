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
        Schema::create('devis', function (Blueprint $table) {
            $table->id();
            //  Clé étrangère pour le demandeur (relation 1,N)
            $table->foreignId('demandeur_id')->constrained('demandeurs')->onDelete('cascade');
            // Clé étrangère pour le destinataire (relation 0,N)
            $table->foreignId('destinataire_id')->constrained('destinataires')->onDelete('cascade');
            $table->date('date_demande');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devis');
    }
};
