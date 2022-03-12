<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['NomeDrop', 'DescricaoDrop', 'peso', 'unidade_id', 'fornecedor_id'];

    public function ItemDetalhe(){
        return $this->hasOne('App\Models\ItemDetalhe', 'produto_id', 'id');
    }

    public function fornecedor(){
        return $this->belongsTo('App\Models\Fornecedor');
    }
    public function pedidos(){                                        //terceiro    //quarto
        return $this->belongsToMany('App\Models\Pedido', 'pedidos_produtos', 'produto_id', 'pedido_id');
    }
    /*
    3 - Representa o nome da FK da tabela mapeada pelo model na tabela de relacionamento
    4 - Representa o nome da FK da tabela mapeada pelo model utilizada no relacionamento que estamos implementando
    */
}
