<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEndereco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('endereco', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cep');
            $table->string('cidade');
            $table->string('estado');
            $table->string('rua');
            $table->int('numero');
            $table->string('complemento');
            $table->boolean('tipo_endereco');
            $table->foreign('id_usuario')->references ('id')->on ('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('endereco', function (Blueprint $table) {
            //
        });
    }
}
