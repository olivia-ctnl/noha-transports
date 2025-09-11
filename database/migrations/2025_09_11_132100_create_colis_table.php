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
        Schema::create('colis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('devis_id')->constrained('devis')->onDelete('cascade');
            $table->string('nom_produit');
            $table->integer('quantite');
            $table->decimal('poids', 8, 2);
            $table->decimal('volume', 8, 2);
            // La nature des produits est stockée en tant que JSON pour gérer plusieurs valeurs
            $table->json('nature_produit')->nullable();
            $table->date('date_livraison');
            $table->time('heure_livraison');
            $table->text('remarques')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colis');
    }
};
