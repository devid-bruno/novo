<div id="contact" class="bg-black padding-top-bottom-150px">
    <div class="container sm-container-spread">
        <div class="center-row">
            @if (isset($cliente->id))
                <form class="contact-form" method="post" action="{{ route('cliente.update', ['cliente' => $cliente->id]) }}">
                    @csrf
                    @method('PUT')
                @else
                    <form class="contact-form" method="post" action="{{ route('cliente.store') }}">
                        @csrf
            @endif
            <h6 class="roboto text-weight-600 text-extra-large text-gray-light">
                @if (isset($cliente->id))
                    Editar cliente
            </h6>
        @else
            <h6 class="roboto text-weight-600 text-extra-large text-gray-light">Adicionar clientes</h6>
            @endif
            <div class="messages"></div>
            <div class="controls">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input
                                class="form-control form_name bg-transparent no-border-top no-border-left no-border-right  border-color-gray-dark border-2px no-margin-top padding-10px text-small text-white text-weight-400"
                                type="text" value="{{ $cliente->nome ?? old('nome') }}" name="nome" placeholder="nome *">
                            <div class="help-block with-errors">
                                {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="submit" class="btn-send btn btn-small btn-white  sm-display-table" value="Cadastrar">
                </div>
            </div>
        </div>
        </form>