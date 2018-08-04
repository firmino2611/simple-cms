@extends('templates.template')

@section('title') Dashboard @stop

@section('content')

    <!-- Page header -->
    {{-- @component('components.page-header', ['itens' => [
        ['nome' => 'Dashboard', 'ativo' => true]
    ]])
        @slot('titulo') Dashboard @endslot
    @endcomponent --}}
    <!-- ./Page header -->

    <div class="row">
        @component('components.painel', ['colunas' => 12])
            @slot('titulo') Configurações do site @endslot

            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="">Titulo</label>
                    <input name="titulo" class="form-control" type="text" value="{{ Configuracao::getValue('titulo') }}">
                </div>
                <div class="col-md-12 form-group">
                    <label for="">Descricao</label>
                    <textarea name="descricao" class="form-control" style="height: 100px" type="text" >{{ Configuracao::getValue('descricao') }}</textarea>
                </div>
                <div class="col-md-12 form-group">
                    <label for="">Palavras-chave (separadas por virgula)</label>
                    <input  name="palavras_chave" class="form-control" type="text" value="{{ Configuracao::getValue('palavras_chave') }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="">Logo</label> <br>
                    <label for="logo" class="label label-primary" style="cursor:pointer"><i class="fa fa-image"></i>  Selecionar imagem</label>
                    <input style="display: none" id="logo" name="logo" class="form-control" type="file">
                </div>
                <div class="col-md-3">
                    <img src="{{ Configuracao::getValue('logo') }}" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="">Favicon</label> <br>
                    <label for="favicon" class="label label-primary" style="cursor:pointer"><i class="fa fa-image"></i>  Selecionar imagem</label>
                    <input style="display: none" id="favicon" name="favicon" class="form-control" type="file">
                </div>
                <div class="col-md-3">
                    <img src="{{ Configuracao::getValue('favicon') }}" alt="">
                </div>
            </div>

            <h4>Informacoes de Contato</h4>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="">Email</label> <br>
                    <input name="email" class="form-control" type="text" value="{{ Configuracao::getValue('email') }}">
                </div>

                <div class="col-md-12 form-group">
                    <label for="">Google Maps</label> <br>
                    <textarea name="google_maps" class="form-control"  style="height: 100px" type="text" >{{ Configuracao::getValue('google_maps') }}</textarea>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-default btn-rounded">Salvar alteracoes</button>
                </div>
            </div>
        @endcomponent
    </div>
    

@stop