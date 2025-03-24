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
        Schema::create('k_p_i_claims', function (Blueprint $table) {
            $table->id();
            $table->string('closing_date');
            $table->integer('proceedings');
            $table->integer('declined');
            $table->decimal('proceeding_value', 11, 2);
            $table->decimal('fixed_amount', 11, 2);
            $table->decimal('funding', 11, 2);
            $table->decimal('buy_back', 11, 2);
            $table->integer('portfolio_number');
            $table->text('observations')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('k_p_i_claims');
    }
};
