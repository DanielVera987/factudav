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
            $table->string('taxregime_id'); // Regimen fiscal
            $table->string('country_id');
            $table->string('state_id');
            $table->string('municipality_id');
            $table->string('location');
            $table->string('street');
            $table->string('colony');
            $table->string('zip');
            $table->string('no_exterior');
            $table->string('no_inside');
            $table->string('certificate')->nullable();
            $table->string('key_private')->nullable();
            $table->string('password')->nullable();
            $table->string('name_pac')->nullable();
            $table->string('password_pac')->nullable();
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
