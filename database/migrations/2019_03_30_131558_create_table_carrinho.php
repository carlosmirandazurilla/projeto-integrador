<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCarrinho extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carrinho', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('id_produto')->references ('id')->on ('produto');
            $table->int('quantidade');
            $table->float('valor_total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carrinho', function (Blueprint $table) {
            //
        });
    }
}
