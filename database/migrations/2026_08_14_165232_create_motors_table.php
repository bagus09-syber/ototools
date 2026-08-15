<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('motors', function (Blueprint $table) {
            $table->id();

            $table->string('merk');
            $table->string('model');

            $table->integer('tahun')->nullable();

            $table->decimal('bore', 8, 2)->nullable();
            $table->decimal('stroke', 8, 2)->nullable();
            $table->decimal('cc', 8, 2)->nullable();

            $table->string('ban_depan')->nullable();
            $table->string('ban_belakang')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('motors');
    }
};