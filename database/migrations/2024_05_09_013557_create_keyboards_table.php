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
        Schema::create('keyboards', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('brand');
            $table->string('model');
            $table->enum('type', ['Synthesizer Workstation', 'Expandable Synthesizer', 'Digital Piano', 'Synthesizer', 'Workstation Keyboard', 'Stage Piano', 'Organ', 'Electric Piano', 'MIDI Controller']);
            $table->string('color');
            $table->float('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keyboards');
    }
};
