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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->json('etudiants');
            $table->json('encadrants');
            $table->json('jurys');
            $table->string('diplome');
            $table->string('sujet');
            $table->string('departement');
            $table->string('annee');
            $table->json('mots_cles');
            $table->timestamps();

            $table->unique(['etudiants','sujet']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};
