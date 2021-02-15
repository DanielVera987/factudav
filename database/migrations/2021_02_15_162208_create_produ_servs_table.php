<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduServsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produ_servs', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('start_date_validity')->nullable();
            $table->string('end_date_validity')->nullable();
            $table->longText('similarwords')->nullable();
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
        Schema::dropIfExists('produ_servs');
    }
}
