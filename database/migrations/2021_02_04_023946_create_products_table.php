<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bussine_id')
                ->references('id')
                ->on('bussines');
                
            $table->string('code')->unique();
            $table->string('name');
            $table->longText('description');
            $table->string('stock');
            $table->string('alert_stock');
            $table->string('cost');
            $table->string('price');
            $table->foreignId('tax_id')
                ->references('id')
                ->on('tax');
            $table->string('image');
            $table->string('is_active')->nullable();
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
        Schema::dropIfExists('products');
    }
}
