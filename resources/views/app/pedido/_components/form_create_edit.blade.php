<div id="contact" class="bg-black padding-top-bottom-150px">
    <div class="container sm-container-spread">
        <div class="center-row">
            @if (isset($pedido->id))
                <form class="contact-form" method="post" action="{{ route('pedido.update', ['pedido' => $pedido->id]) }}">
                    @csrf
                    @method('PUT')
                @else
                    <form class="contact-form" method="post" action="{{ route('pedido.store') }}">
                        @csrf
            @endif
            <h6 class="roboto text-weight-600 text-extra-large text-gray-light">
                @if (isset($pedido->id))
                    Editar pedido
            </h6>
        @else
            <h6 class="roboto text-weight-600 text-extra-large text-gray-light">Adicionar pedidos</h6>
            @endif
            <div class="messages"></div>
            <div class="controls">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <select name="cliente_id">
                                <option value="">--Selecione um Cliente--</option>
                                @foreach ($clientes as $cliente)
                                    <option value="{{ $cliente->id }}"
                                        {{ ($pedido->cliente_id?? old('cliene_id')) == $cliente->id ? 'selected' : '' }}>
                                        {{ $cliente->nome }}</option>
                                @endforeach
                            <div class="help-block with-errors">
                                {{ $errors->has('cliente_id') ? $errors->first('cliente_id') : '' }}
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    @if (isset($pedido->id))
                    <input type="submit" class="btn-send btn btn-small btn-white  sm-display-table" value="Editar">    
                    @else
                    
                    <input type="submit" class="btn-send btn btn-small btn-white  sm-display-table" value="Cadastrar">
                    @endif
                </div>
            </div>
        </div>
        </form>