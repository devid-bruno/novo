<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->timestamps();
            //$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedores');
       //TESTANDO SE A TABELA EXISTE, CASO EXISTA VAI REMOVER E COLOCAR A NOVA QUE ESTA NO UP Schema::dropIfExists('fornecedores');
      //REMOVENDO SEM TESTAR SE EXISTE, INDEPENDENTE SE EXISTIR OU NAO, VAI SER REMOVIDA Schema::drop('fornecedores');
    }
}
