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
            $table->string('brand');
            $table->string('model');
            $table->enum('type', ['Digital Piano', 'Synthesizer', 'Workstation Keyboard', 'Stage Piano', 'Organ', 'Electric Piano', 'MIDI Controller']);
            $table->string('color');
            // $table->date('manufactured_date');
            // $table->integer('number_of_keys');
            // $table->string('weight');
            // $table->string('dimension');
            // $table->string('features');
            // $table->string('polyphony');
            // $table->string('input');
            // $table->string('output');
            $table->float('price');
            // $table->string('power_requirements');
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
