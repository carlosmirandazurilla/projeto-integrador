<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('compra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('id_carrinho')->references ('id')->on ('carrinho');
            $table->date('data_compra');
            $table->date('data_entrega');
            $table->float('valor_frete');
            $table->float('total');
            $table->foreign('id_usuario')->references ('id')->on ('usuario');
            $table->string('status');
            $table->foreign('id_endereco')->references ('id')->on ('endereco');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('compra', function (Blueprint $table) {
            //
        });
    }
}
