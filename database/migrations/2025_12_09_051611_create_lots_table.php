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
        Schema::create('lots', function (Blueprint $table) {
            $table->id(); // id_lote

            $table->string('lot_number'); // numero_lote
            $table->decimal('area_m2', 10, 2); // area en metros cuadrados
            $table->decimal('base_price', 10, 2); // precio base
            $table->decimal('price_m2', 10, 2); // precio por metro cuadrado

            $table->enum('status', ['Available', 'Reserved', 'Sold', 'Blocked'])
                ->default('Available'); // estado

            $table->unsignedBigInteger('project_id'); // FK a proyecto

            // Definimos la clave foránea
            $table->foreign('project_id')
                ->references('id')->on('projects')
                ->onDelete('cascade');

            $table->timestamps(); // created_at & updated_at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lots');
    }
};
