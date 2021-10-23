<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClaroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claroTable', function (Blueprint $table) {
            $table->id();
            $table->string('IpTablet');
            $table->string('CodTienda');
            $table->integer('Cadena');
            $table->integer('CodRst');
            $table->string('Estado');
            $table->dateTime('FechaHora');
            $table->dateTime('FechaCreacion');
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
        Schema::dropIfExists('controlTablets');
    }
}
