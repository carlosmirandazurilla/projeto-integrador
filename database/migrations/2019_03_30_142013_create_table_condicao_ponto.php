<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCondicaoPonto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('condicao_ponto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('id_categoria')->references ('id')->on ('categoria');
            $table->foreign('id_produto')->references ('id')->on ('produto');
            $table->int('pontos_produto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('condicao_ponto', function (Blueprint $table) {
            //
        });
    }
}
