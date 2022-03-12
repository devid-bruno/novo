
<div id="contact" class="bg-black padding-top-bottom-150px">
    <div class="container sm-container-spread">
        <div class="center-row">
                    <form class="contact-form" method="post" action="{{ route('pedido_produto.store', ['pedido' => $pedido]) }}">
                        @csrf
            <h6 class="roboto text-weight-600 text-extra-large text-gray-light">Adicionar pedidos</h6>
            <div class="messages"></div>
            <div class="controls">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <select name="produto_id">
                                <option value="">--Selecione um Produto--</option>
                                @foreach ($produtos as $produto)
                                    <option value="{{ $produto->id }}"
                                        {{ old('produto_id') == $produto->id ? 'selected' : '' }}>
                                        {{ $produto->NomeDrop }}</option>
                                @endforeach
                            </select>
                            <div class="help-block with-errors">
                                {{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="number" name="quantidade" class="btn-send btn btn-small btn-white  sm-display-table" value="{{old('quantidade') ? old('quantidade') : ''}}" placeholder="Quantidade">
                    {{ $errors->has('quantidade') ? $errors->first('quantidade') : '' }}
                </div>
                <div class="col-md-12">
                    <input type="submit" class="btn-send btn btn-small btn-white  sm-display-table" value="Cadastrar">
                </div>
            </div>
        </div>
        </form>