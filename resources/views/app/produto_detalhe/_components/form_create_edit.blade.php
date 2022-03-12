    <div class="container sm-container-spread">

        <div class="center-row">
            @if (isset($produto_detalhe->id))
                <form class="contact-form" method="post"
                    action="{{ route('produto.update', ['produto' => $produto_detalhe->id]) }}">
                    @csrf
                    @method('PUT')
                @else
                    <form class="contact-form" method="post" action="{{ route('produto-detalhe.store') }}">
                        @csrf
            @endif
            <h6 class="roboto text-weight-600 text-extra-large text-gray-light">
                @if (isset($produto_detalhe->id))
                    Editar Produto
            </h6>
        @else
            <h6 class="roboto text-weight-600 text-extra-large text-gray-light">Adicionar Detalhe aos Produtos</h6>
            @endif
            <div class="messages"></div>
            <div class="controls">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input
                                class="form-control form_name bg-transparent no-border-top no-border-left no-border-right  border-color-gray-dark border-2px no-margin-top padding-10px text-small text-white text-weight-400"
                                type="text" value="{{ $produto_detalhe->produto_id ?? old('produto_id') }}"
                                name="produto_id" placeholder="ID do Produto">
                            <div class="help-block with-errors">
                                {{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input
                                class="form-control form_email bg-transparent no-border-top no-border-left no-border-right border-color-gray-dark border-2px padding-10px text-small text-white text-weight-400"
                                type="text" value="{{ $produto_detalhe->comprimento ?? old('comprimento') }}"
                                name="comprimento" placeholder="Comprimento">
                            {{ $errors->has('comprimento') ? $errors->first('comprimento') : '' }}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input
                                class="form-control form_phone bg-transparent no-border-top no-border-left no-border-right border-color-gray-dark border-2px padding-10px text-small text-white text-weight-400"
                                type="text" value="{{ $produto_detalhe->altura ?? old('altura') }}" name="altura"
                                placeholder="altura do Produto*">
                            {{ $errors->has('altura') ? $errors->first('altura') : '' }}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input
                                class="form-control form_phone bg-transparent no-border-top no-border-left no-border-right border-color-gray-dark border-2px padding-10px text-small text-white text-weight-400"
                                type="text" value="{{ $produto_detalhe->largura ?? old('largura') }}" name="largura"
                                placeholder="Largura do Produto*">
                            {{ $errors->has('largura') ? $errors->first('largura') : '' }}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="unidade_id">
                                <option value="">--Selecione a unidade de medida--</option>
                                @foreach ($unidades as $unidades)
                                    <option value="{{ $unidades->id }}"
                                        {{ ($produto_detalhe->unidade_id ?? old('unidade_id')) == $unidades->id ? 'selected' : '' }}>
                                        {{ $unidades->descricao }}</option>
                                @endforeach
                            </select>
                            {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="submit" class="btn-send btn btn-small btn-white  sm-display-table" value="Cadastrar">
                </div>
            </div>
        </div>
        </form>
