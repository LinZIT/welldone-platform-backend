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
        Schema::create('k_p_i_i_t_s', function (Blueprint $table) {
            $table->id();
            $table->string('closing_date');
            $table->integer('optimizations');
            $table->integer('created_automations');
            $table->integer('improved_automations');
            $table->integer('web');
            $table->integer('approved_developments');
            $table->integer('testing');
            $table->integer('corrections');
            $table->integer('created_tickets');
            $table->integer('closed_tickets');
            $table->integer('in_progress_projects');
            $table->string('observations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('k_p_i_i_t_s');
    }
};
