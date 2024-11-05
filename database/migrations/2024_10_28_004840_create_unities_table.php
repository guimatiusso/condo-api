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
        Schema::create('unity', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('block')->nullable();
            $table->string('floor')->nullable();
            $table->unsignedBigInteger('condominium_id');
            $table->foreign('condominium_id')->references('id')->on('condominium')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unity');
    }
};
