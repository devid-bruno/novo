@extends('app.layouts.produto')
@section('titulo', 'Editar Produtos')
@section('conteudo')
    
    @component('app.produto._components.form_create_edit', ['produto' => $produto, 'unidades' => $unidades, 'fornecedores' => $fornecedores])

    @endcomponent
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
