<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bussine_id')
                ->references('id')
                ->on('bussines');
            $table->foreignId('invoice_id')
                ->references('id')
                ->on('invoices');
            $table->foreignId('product_id')
                ->references('id')
                ->on('products');
            $table->string('prodserv_id');
            $table->foreignId('unit_id')
                ->references('id')
                ->on('units');
            $table->string('description');
            $table->string('quantity');
            $table->string('discount');
            $table->string('amount');            
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
        Schema::dropIfExists('details');
    }
}
