@extends('app.layouts.produto')
@section('titulo', 'Editar Detalhes do Produtos')
@section('conteudo')
        @component('app.produto_detalhe._components.form_create_edit', ['produto_detalhe' => $produto_detalhe, 'unidades' =>
            $unidades])

        @endcomponent
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
