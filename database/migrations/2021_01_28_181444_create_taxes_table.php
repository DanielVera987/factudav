<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bussine_id')
                ->references('id')
                ->on('bussines');
            $table->string('name');
            $table->set('code', ['001', '002', '003']);
            $table->set('tax', ['isr', 'iva', 'ieps']);
            $table->set('type', ['traslado', 'retenido']);
            $table->set('factor', ['Tasa', 'Cuota', 'Exento']);
            $table->string('tasa');
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
        Schema::dropIfExists('taxes');
    }
}
