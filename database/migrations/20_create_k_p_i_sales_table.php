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
        Schema::create('k_p_i_sales', function (Blueprint $table) {
            $table->id();
            $table->string('closing_date');
            $table->unsignedBigInteger('adviser_id')->nullable(); // Asesor
            $table->foreign('adviser_id')->references('id')->on('advisers')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('team_id')->nullable(); // Team 
            $table->foreign('team_id')->references('id')->on('teams')->onUpdate('cascade')->onDelete('cascade');
            $table->string('week'); // Semana [Texto]
            $table->decimal('roof', 11, 2); // Roof [Decimal]
            $table->decimal('water', 11, 2); // Water [Decimal]
            $table->decimal('claims', 11, 2); // Claims [Decimal]
            $table->text('observations')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('k_p_i_sales');
    }
};
