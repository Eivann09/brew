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
        Schema::create('beverages_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('size',['medio', 'grande']);
            $table->enum('pearls', ['withPearl', 'noPearl']);
            $table->integer('price');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beverages_models');
    }
};
