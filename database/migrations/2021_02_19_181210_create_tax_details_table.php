<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('detail_id')
                ->references('id')
                ->on('details');
            $table->foreignId('tax_id')
                ->references('id')
                ->on('taxes');
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
        Schema::dropIfExists('tax_details');
    }
}
