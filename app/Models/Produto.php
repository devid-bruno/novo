<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['NomeDrop', 'DescricaoDrop', 'peso', 'unidade_id'];

    public function ProdutoDetalhe(){
        return $this->hasOne('App\Models\ProdutoDetalhe');

        //Produto te 1 ProdutoDetalhe

        //1 registro relacionado em produto_detalhes (fk) -> produtos_id
        //produto (fk) -> id

    }
}
