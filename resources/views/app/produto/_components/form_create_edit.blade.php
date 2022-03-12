<div id="contact" class="bg-black padding-top-bottom-150px">
    <div class="container sm-container-spread">
        <div class="center-row">
            @if (isset($produto->id))
                <form class="contact-form" method="post" action="{{ route('produto.update', ['produto' => $produto->id]) }}">
                    @csrf
                    @method('PUT')
                @else
                    <form class="contact-form" method="post" action="{{ route('produto.store') }}">
                        @csrf
            @endif
            <h6 class="roboto text-weight-600 text-extra-large text-gray-light">
                @if (isset($produto->id))
                    Editar Produto
            </h6>
        @else
            <h6 class="roboto text-weight-600 text-extra-large text-gray-light">Adicionar Produtos</h6>
            @endif
            <div class="messages"></div>
            <div class="controls">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input
                                class="form-control form_name bg-transparent no-border-top no-border-left no-border-right  border-color-gray-dark border-2px no-margin-top padding-10px text-small text-white text-weight-400"
                                type="text" value="{{ $produto->NomeDrop ?? old('NomeDrop') }}" name="NomeDrop" placeholder="Nome Drop *">
                            <div class="help-block with-errors">
                                {{ $errors->has('NomeDrop') ? $errors->first('NomeDrop') : '' }}
                            </div>

                        </div>
                    </div>
                </div>
                <select name="fornecedor_id">
                    <option value="">--Selecione um fornecedor--</option>
                    @foreach ($fornecedores as $fornecedor)
                        <option value="{{ $fornecedor->id }}"
                            {{ ($produto->fornecedor_id?? old('fornecedor_id')) == $fornecedor->id ? 'selected' : '' }}>
                            {{ $fornecedor->nome }}</option>
                    @endforeach
                </select>
                {{ $errors->has('fornecedor_id') ? $errors->first('fornecedor_id') : '' }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input
                                class="form-control form_email bg-transparent no-border-top no-border-left no-border-right border-color-gray-dark border-2px padding-10px text-small text-white text-weight-400"
                                type="text" value="{{ $produto->DescricaoDrop ?? old('DescricaoDrop') }}" name="DescricaoDrop"
                                placeholder="Descrição Drop *">
                            {{ $errors->has('DescricaoDrop') ? $errors->first('DescricaoDrop') : '' }}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input
                                class="form-control form_phone bg-transparent no-border-top no-border-left no-border-right border-color-gray-dark border-2px padding-10px text-small text-white text-weight-400"
                                type="text" value="{{ $produto->peso ?? old('peso') }}" name="peso" placeholder="Peso *">
                            {{ $errors->has('peso') ? $errors->first('peso') : '' }}
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
                                        {{ ($produto->unidade_id ?? old('unidade_id')) == $unidades->id ? 'selected' : '' }}>
                                        {{ $unidades->descricao }}</option>
                                @endforeach
                            </select>
                            {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    @if (isset($produto->id))
                    <input type="submit" class="btn-send btn btn-small btn-white  sm-display-table" value="Editar">    
                    @else
                    
                    <input type="submit" class="btn-send btn btn-small btn-white  sm-display-table" value="Cadastrar">
                    @endif
                </div>
            </div>
        </div>
        </form>