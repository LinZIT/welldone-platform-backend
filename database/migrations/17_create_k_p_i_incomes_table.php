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
        Schema::create('k_p_i_incomes', function (Blueprint $table) {
            $table->id();
            $table->string('closing_date');
            $table->integer('number_of_invoices_by_negotiation'); // N° facturas por negociacion [Entero]
            $table->decimal('value_of_invoices_by_negotiation', 11, 2)->nullable(); // Valor de facturas por negociacion [Moneda]
            $table->decimal('accounts_receivable_by_negotiation', 11, 2)->nullable(); // Cuentas por cobrar por negociacion [Moneda]
            $table->decimal('income_by_negotiation', 11, 2)->nullable(); // Ingresos por negociacion [Moneda]
            $table->integer('charges'); // Cobros [Entero]
            $table->integer('number_of_calls'); // N° llamadas [Entero]
            $table->integer('number_of_effective_calls'); // N° llamadas efectivas [Entero]
            $table->decimal('income_by_portfolio', 11, 2)->nullable(); // Ingresos por portafolio [Moneda]
            $table->decimal('accounts_receivable_by_portfolio', 11, 2)->nullable(); // Cuentas por cobrar por portafolio [Moneda]
            $table->decimal('global_income', 11, 2)->nullable(); // Ingreso global [Moneda]
            $table->text('observations')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('k_p_i_incomes');
    }
};
