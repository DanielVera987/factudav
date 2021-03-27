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
            $table->string('invoice_pay_id');
            $table->string('no_parciality');
            $table->string('amount_prev');
            $table->string('amount_paid');
            $table->string('amount_unpaid');
        
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
