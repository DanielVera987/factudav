<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplementPaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complement_pays', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')
                ->references('id')
                ->on('invoices');
            $table->string('serie');
            $table->string('folio');
            $table->string('date');
            $table->foreignId('currency_id')
                ->references('id')
                ->on('currencies');
            $table->set('type_vaucher', ['P']);
            $table->foreignId('way_to_pay_id')
                ->references('id')
                ->on('way_to_pays');
            $table->string('date_pay');
            $table->string('amount');
            $table->string('num_operation')->nullable();
            $table->string('rfc_payer')->nullable();
            $table->string('account_payer')->nullable();
            $table->string('rfc_beneficiary')->nullable();
            $table->string('account_beneficiary')->nullable();
            $table->string('no_parciality')->nullable();
            $table->string('name_file')->nullable();
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
        Schema::dropIfExists('complement_pays');
    }
}
