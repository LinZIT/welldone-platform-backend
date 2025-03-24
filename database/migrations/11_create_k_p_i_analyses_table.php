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
        Schema::create('k_p_i_analyses', function (Blueprint $table) {
            $table->id();
            $table->string('closing_date');
            $table->integer('received_claims');
            $table->integer('checked_claims');
            $table->integer('approved_claims');
            $table->integer('rechecked_claims');
            $table->integer('cancelled_claims');
            $table->integer('on_hold_claims');
            $table->integer('unchecked_claims');
            $table->integer('approved_claims_weeks_before');
            $table->integer('clean_initiative');
            $table->integer('integrity_claims');
            $table->integer('received_leads');
            $table->integer('checked_leads');
            $table->integer('unchecked_leads');
            $table->integer('approved_leads');
            $table->integer('rechecked_leads');
            $table->integer('on_hold_leads');
            $table->integer('cancelled_leads');
            $table->string('wdm_zone');
            $table->text('observations')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('k_p_i_analyses');
    }
};
