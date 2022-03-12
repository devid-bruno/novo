<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    public function produtos(){
        //return $this->belongsToMany('App\Models\Produto', 'pedidos_produtos');
        return $this->belongsToMany('App\Models\Item', 'pedidos_produtos', 'pedido_id', 'produto_id')->withPivot('created_at', 'id');


        /*
        1 - Modelo do relacionamento NxN em relacao ao modelo que estamos implementando
        2 - é a tabela auxiliar que armazena os registros de relacionamento
        3 - representa o nome da fk da tabela mapeada pelo modelo da tabela relacionada
        4 - representa o nome da fk da tabela mapeada pelo model utilizado no relacionamento que utilizamos

        */
    }
}
