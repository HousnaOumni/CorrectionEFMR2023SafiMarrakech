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
        Schema::create('eleve_activite', function (Blueprint $table) {
            $table->id();
            $table->foreignId('eleve_id')->constrained();
            $table->foreignId('activite_id')->constrained();
            //$table->primary(['eleve_id','club_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pivot_eleve_activite');
    }
};
