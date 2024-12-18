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
        Schema::create('realisations', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->string('maitre');
            $table->string('partenaire');
            $table->string('datee');
            $table->string('montant');
            $table->string('mission');
            $table->json('galerie')->nullable();
            $table->string('image');
            $table->unsignedBigInteger('sous_categorie_id');
            $table->foreign('sous_categorie_id')->references('id')->on('sous_categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realisations');
    }
};
