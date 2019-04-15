<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->int('codigo_produto');
            $table->string('nome');
            $table->string('descricao');
            $table->date('data_compra');
            $table->foreign('id_categoria')->references ('id')->on ('categoria_produto');
            $table->string('modelo');
            $table->string('valor_produto');
            $table->foreign('valor_ponto')->references ('pontos_produto')-> on('condicao_ponto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produto', function (Blueprint $table) {
            //
        });
    }
}
