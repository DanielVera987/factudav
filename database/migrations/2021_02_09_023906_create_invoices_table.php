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
            $table->string('folio')->unique();
            $table->string('way_to_pay');
            $table->string('currency_id');
            $table->string('payment_method_id');
            $table->string('usecfdi_id');
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
