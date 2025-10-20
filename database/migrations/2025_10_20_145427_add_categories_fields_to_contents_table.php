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
        Schema::table('contents', function (Blueprint $table) {
            $table->string('category')->nullable()->after('type'); // Composant, Page
            $table->string('page')->nullable()->after('category'); // Nom de la page
            $table->string('section')->nullable()->after('page'); // Section de la page
            $table->string('label')->nullable()->after('section'); // Label lisible
            $table->text('description')->nullable()->after('label'); // Description
            
            // Index pour améliorer les performances de filtrage
            $table->index('category');
            $table->index('page');
            $table->index('section');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contents', function (Blueprint $table) {
            // Suppression des index avant de supprimer les colonnes
            $table->dropIndex(['category']);
            $table->dropIndex(['page']);
            $table->dropIndex(['section']);
            $table->dropColumn(['category', 'page', 'section', 'label', 'description']);
        });
    }
};
