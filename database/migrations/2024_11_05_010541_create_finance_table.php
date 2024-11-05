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
        Schema::create('finance', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['revenue', 'expense']);
            $table->string('description');
            $table->decimal('value', 10, 2);
            $table->timestamp('due_date');
            $table->timestamp('pay_day')->nullable();
            $table->boolean('status')->default(0);
            $table->unsignedBigInteger('unity_id')->nullable();
            $table->unsignedBigInteger('condominium_id');
            $table->foreign('unity_id')->references('id')->on('unity')->onDelete('set null');
            $table->foreign('condominium_id')->references('id')->on('condominium')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finance');
    }
};
