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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained();
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('classification', [1, 2, 3]); //leve, media, urgente
            $table->enum('status', ['pending', 'in_progress', 'completed']); //'pending', 'in_progress', 'completed'
            $table->enum('type', [1, 2, 3, 4]); //Bug, Improvement, Upgrade, Feature
            $table->date('month');
            $table->decimal('value', 8, 2);
            $table->date('term');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
