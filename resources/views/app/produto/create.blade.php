@extends('app.layouts.produto')
@section('titulo', 'Detalhes Produtos')
@section('conteudo')
        @component('app.produto._components.form_create_edit', ['unidades' => $unidades, 'fornecedores' => $fornecedores])
            
        @endcomponent
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
