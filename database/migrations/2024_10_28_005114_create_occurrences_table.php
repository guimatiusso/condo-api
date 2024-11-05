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
        Schema::create('occurrence', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->enum('type', ['complain', 'maintenance', 'security']);
            $table->enum('status', ['open', 'on_going', 'solved']);
            $table->date('closed_at')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('unity_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('unity_id')->references('id')->on('unity')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('occurrence');
    }
};
