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
            $table->string('bussine_name');
            $table->string('tradename');
            $table->string('rfc');
            $table->string('email');
            $table->string('telephone');
            $table->string('type_person');
            $table->string('taxregime_id');
            $table->string('curp');
            $table->string('country_id');
            $table->string('state_id');
            $table->string('municipality_id');
            $table->string('location');
            $table->string('no_inside');
            $table->string('no_exterior');
            $table->string('zip');
            $table->string('colony');
            $table->string('street');
            $table->string('certificate');
            $table->string('key_certificate');
            $table->string('key_private');
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
