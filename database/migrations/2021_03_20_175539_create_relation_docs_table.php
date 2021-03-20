<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation_docs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')
                ->nullable()
                ->references('id')
                ->on('inovoices');

            $table->foreignId('type_relation_id')
                ->references('id')
                ->on('type_relations');

            $table->longText('uuid');
            
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
        Schema::dropIfExists('relation_docs');
    }
}
