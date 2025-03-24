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
        Schema::create('k_p_i_operation_californias', function (Blueprint $table) {
            $table->id();
            $table->string('closing_date');
            $table->integer('week');
            $table->integer('roof');
            $table->integer('water');
            $table->integer('mold');
            $table->integer('mold_testing');
            $table->integer('shrink_wrap');
            $table->integer('inspections');
            $table->integer('second_tarp');
            $table->text('observations')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('k_p_i_operation_californias');
    }
};
