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
        Schema::create('k_p_i_finances', function (Blueprint $table) {
            $table->id();
            $table->string('closing_date');
            $table->decimal('assets', 11, 2);
            $table->decimal('gross_income', 11, 2);
            $table->decimal('expenses', 11, 2);
            $table->string('income_vs_expenses_percentage');
            $table->integer('balances');
            $table->string('productivity_percentage');
            $table->decimal('expenditures_according_to_finantial_plan', 11, 2);
            $table->decimal('reserved_payments', 11, 2);
            $table->decimal('reservations', 11, 2);
            $table->text('observations')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('k_p_i_finances');
    }
};
