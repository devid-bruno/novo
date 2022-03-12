@extends('app.layouts.produto')
@section('titulo', 'Detalhes do Produtos')
@section('conteudo')
        @component('app.produto_detalhe._components.form_create_edit', ['unidades' => $unidades])
            
        @endcomponent
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
