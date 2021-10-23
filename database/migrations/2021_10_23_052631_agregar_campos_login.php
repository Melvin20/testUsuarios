<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarCamposLogin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string("nombreCompleto")->default("");
            $table->string("cedula")->default("");
            $table->string("celular")->default("");
            $table->string("fechaNacimiento")->default("");
            $table->string("codigoCiudad")->default("");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
           
            $table->dropColumn("nombreCompleto");
            $table->dropColumn("cedula");
            $table->dropColumn("celular");
            $table->dropColumn("fechaNacimiento");
            $table->dropColumn("codigoCiudad");
        });
    }
}
