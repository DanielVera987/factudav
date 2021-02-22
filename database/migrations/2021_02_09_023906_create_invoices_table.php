<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bussine_id')
                ->references('id')
                ->on('bussines');

            $table->foreignId('customer_id')
                ->references('id')
                ->on('customers');

            $table->string('folio');

            $table->foreignId('way_to_pay_id')
                ->references('id')
                ->on('way_to_pays');

            $table->foreignId('currency_id')
                ->references('id')
                ->on('currencies');

            $table->foreignId('payment_method_id')
                ->references('id')
                ->on('payment_methods');

            $table->foreignId('usecfdi_id')
                ->references('id')
                ->on('usecfis');
                
            $table->string('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
