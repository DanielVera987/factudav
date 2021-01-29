<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bussine_id')
                ->references('id')
                ->on('bussines');
            
            $table->string('bussine_name');
            $table->string('tradename');
            $table->string('rfc');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->foreignId('usecfdi_id')
                ->reference('id')
                ->on('usecfdis');
                
            $table->foreignId('country_id')
                ->references('id')
                ->on('contries');

            $table->foreignId('state_id')
                ->references('id')
                ->on('states');
                
            $table->foreignId('municipality_id')
                ->references('id')
                ->on('municipalities');
            $table->string('location');
            $table->string('street');
            $table->string('colony');
            $table->string('zip');
            $table->string('no_exterior');
            $table->string('no_inside');
            $table->string('street_reference')->nullable();
            $table->string('type');
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
        Schema::dropIfExists('customers');
    }
}
