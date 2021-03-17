<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBussinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bussines', function (Blueprint $table) {
            $table->id();
            $table->string('bussine_name'); // Razon social
            $table->string('tradename'); // Nombre Comercial
            $table->string('rfc');
            $table->string('email');
            $table->string('telephone');
            $table->string('type_person');
            $table->foreignId('taxregimen_id')
                ->nullable()
                ->reference('id')
                ->on('tax_regimens'); // Regimen fiscal
            $table->foreignId('country_id')
                ->nullable()
                ->reference('id')
                ->on('countries');
            $table->string('state_id')
                ->nullable()
                ->reference('id')
                ->on('states');
            $table->string('municipality_id')
                ->nullable()
                ->reference('id')
                ->on('municipalities');
            $table->string('location');
            $table->string('street');
            $table->string('colony');
            $table->string('zip');
            $table->string('no_exterior');
            $table->string('no_inside');
            $table->string('start_serie')->default('Factura-');
            $table->string('start_folio')->default('1');
            $table->string('certificate')->nullable();
            $table->string('key_private')->nullable();
            $table->string('password')->nullable();
            $table->string('name_pac')->nullable();
            $table->string('password_pac')->nullable();
            $table->string('production_pac')->default('NO');
            $table->string('logo')->nullable()->default('davadev.jpg');
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
        Schema::dropIfExists('bussines');
    }
}
