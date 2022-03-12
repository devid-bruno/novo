@extends('app.layouts.produto')
@section('titulo', 'Cadastro de Pedido')
@section('conteudo')
        @component('app.pedido._components.form_create_edit', ['clientes' => $clientes])
            
        @endcomponent
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
