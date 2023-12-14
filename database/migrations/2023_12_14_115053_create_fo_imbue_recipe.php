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
        Schema::create('fo_imbue_recipe', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('location',20);
            $table->string('action',20);
            $table->string('element',20);
            $table->string('domain',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fo_imbue_recipe');
    }
};
