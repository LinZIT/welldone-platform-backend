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
        Schema::create('k_p_i_customer_services', function (Blueprint $table) {
            $table->id();
            $table->string('closing_date');
            $table->integer('aditional_applications');
            $table->integer('adviser_tickets');
            $table->integer('ll_inconsequential');
            $table->integer('ll_no_solution_problems');
            $table->integer('ll_confirmation');
            $table->integer('ll_problems');
            $table->integer('ll_repairs');
            $table->integer('ll_mold_and_shrinkwrap_schedule');
            $table->integer('ll_triway_call');
            $table->integer('ll_claim_number_call');
            $table->integer('ll_satisfaction_survey');
            $table->integer('ll_marketing_survey');
            $table->integer('ll_welcome_call');
            $table->integer('total_calls');
            $table->integer('emails_sent');
            $table->integer('emails_managed');
            $table->integer('work_orders');
            $table->integer('google_review_applications');
            $table->integer('google_reviews');
            $table->integer('BBB_review_applications');
            $table->integer('BBB_reviews');
            $table->integer('repairs_of_the_day');
            $table->integer('inspections_of_the_day');
            $table->integer('remediations_of_the_day');
            $table->integer('shrinkwrap_of_the_day');
            $table->integer('ll_clean_initiative');
            $table->integer('ci_to_wdm');
            $table->integer('wdm_to_ci');
            $table->text('observations')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('k_p_i_customer_services');
    }
};
