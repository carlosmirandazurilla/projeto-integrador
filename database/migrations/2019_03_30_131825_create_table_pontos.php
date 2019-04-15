<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePontos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pontos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('id_categoria')->references ('id')->on ('categoria');
            $table->foreign('id_condicao_produto')->references ('id')->on ('condicao_produto');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pontos', function (Blueprint $table) {
            //
        });
    }
}
