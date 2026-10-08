<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('title', 150);
            $table->text('description');
            $table->string('location')->nullable();
            $table->string('foto')->nullable();
            $table->enum('status', ['pending', 'process', 'done'])
                ->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};