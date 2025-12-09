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
        Schema::create('projects', function (Blueprint $table) {
            $table->id(); // id_proyecto
            $table->string('name');      // nombre
            $table->string('code');      // código
            $table->string('location');  // ubicación
            $table->enum('status', ['active', 'in_progress','completed','suspended'])->default('active');
            $table->timestamps(); // created_at fecha_creacion & updated_at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
