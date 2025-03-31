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
        Schema::create('measurement_values', function (Blueprint $table) {
            $table->id(); // Автоінкрементний первинний ключ (int)
            $table->foreignId('measurement_id')->constrained('measurements'); // Зв'язок з measurements
            $table->string('parameter_id')->constrained('parameters'); // Зв'язок з parameters
            $table->float('value'); // Числове значення виміру
            $table->timestamps(); // created_at та updated_at

            // Опціонально: індекс для швидкого пошуку
            $table->index(['measurement_id', 'parameter_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measurement_values');
    }
};
