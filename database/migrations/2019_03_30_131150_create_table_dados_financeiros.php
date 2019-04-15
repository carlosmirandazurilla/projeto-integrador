<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDadosFinanceiros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dados_financeiros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('id_usuario')->references ('id')->on ('usuario');
            $table->string('forma_pagamento');
            $table->string('nome_impresso_cartao');
            $table->int('ccv');
            $table->int('numero_cartao');
            $table->string('complemento');
            $table->string('data_expiracao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dados_financeiros', function (Blueprint $table) {
            //
        });
    }
}
