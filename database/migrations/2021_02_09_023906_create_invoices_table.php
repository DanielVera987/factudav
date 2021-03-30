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

            $table->string('serie');
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
                ->on('usecfdis');

            $table->string('type_voucher')->set(['I', 'E', 'P']);
            $table->string('name_file');
            $table->string('date');

            $table->string('cancel_date')->nullable();
            $table->longText('cancel_acuse')->nullable();
            $table->string('cancel_status')->nullable();

            /** Information for complement pay */
            $table->string('amount')->nullable();
            $table->string('date_pay')->nullable();
            $table->string('num_operation')->nullable();
            $table->string('rfc_payer')->nullable();
            $table->string('account_payer')->nullable();
            $table->string('rfc_beneficiary')->nullable();
            $table->string('account_beneficiary')->nullable();

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
