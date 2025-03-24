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
        Schema::create('k_p_i_disbursements', function (Blueprint $table) {
            $table->id();
            $table->string('closing_date');
            $table->integer('number_of_overdue_invoices');
            $table->decimal('value_of_paid_invoices', 11, 2);
            $table->decimal('payable_accounts', 11, 2);
            $table->integer('paid_providers');
            $table->text('observations')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('k_p_i_disbursements');
    }
};
