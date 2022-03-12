<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresNovasColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fornecedores', function(Blueprint $table){
            $table->string('uf', 2);
            $table->string('email', 150);
            $table->string('telefone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fornecedores', function(Blueprint $table){
            //REMOVENDO COLUNA DE MODO INDIVIDUAL $table->dropColumn('uf');
            //REMOVENDO VÁRIAS COLUNAS ATRAVES DE UM ARRAY DE COLUNAS $table->dropColumn(['uf', 'email']);
            $table->dropColumn(['uf', 'email', 'telefone']);
        });
    }
}
