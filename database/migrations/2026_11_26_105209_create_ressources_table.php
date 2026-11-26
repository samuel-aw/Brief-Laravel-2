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
        Schema::create('ressources', function (Blueprint $table) {
            $table->id();                                        // bigint PK auto-increment
            $table->string('titre', 255);                        // NOT NULL par défaut
            $table->string('type', 100);
            $table->string('statut', 50)->default('disponible');
            $table->string('emprunteur', 255)->nullable();       // peut être NULL
            $table->timestamps();                                // created_at + updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ressources');
    }
};
