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
            $table->tinyInteger('location');
            $table->tinyInteger('action');
            $table->tinyInteger('element');
            $table->tinyInteger('domain');
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
