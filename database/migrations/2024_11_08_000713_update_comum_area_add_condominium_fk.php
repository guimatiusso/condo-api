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
        Schema::table('comum_area', function (Blueprint $table) {
            $table->unsignedBigInteger('condominium_id')->nullable();
            $table->foreign('condominium_id')->references('id')->on('condominium')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comum_area', function (Blueprint $table) {
            $table->dropColumn(['condominium_id']);
        });
    }
};
