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
        Schema::create('k_p_i_human_resources', function (Blueprint $table) {
            $table->id();
            $table->string('closing_date');
            $table->integer('managment_request'); // Management Request
            $table->integer('employee_requests'); // Employee Requests
            $table->integer('disciplinary_actions'); // Disciplinary Actions
            $table->integer('meetings'); // Meetings
            $table->integer('file_updates'); // File Updates
            $table->integer('new_hires'); // New Hires
            $table->integer('offers'); // Offers
            $table->integer('interviews_scheduled'); // In1terviews Scheduled
            $table->integer('completed_interviews'); // Completed Interviews
            $table->integer('declined'); // Declined
            $table->integer('terminations'); // Terminations
            $table->integer('active_team_members_florida'); // Active team members Florida [Entero]
            $table->integer('active_team_members_texas'); // Active team members Texas [Entero]
            $table->integer('active_team_members_valencia'); // Active team members Valencia (VE) [Entero]
            $table->integer('active_team_members_maracay'); // Active team members Maracay (VE) [Entero]
            $table->text('observations')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('k_p_i_human_resources');
    }
};
