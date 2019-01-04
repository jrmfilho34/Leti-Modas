<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
           
            $table->increments('id');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('titulo');
            $table->mediumText( 'descricao');
            $table->integer('quantidade');
            $table->float('preco');
            $table->float('custo');
            $table->date('validade');
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
        Schema::dropIfExists('produtos');
    }
}
