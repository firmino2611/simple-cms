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
    @component('components.alerta', ['icone' => 'info-circle', 'alerta' => 2])
        <h4>
            Aqui você pode fazer todas as configurações do seu site. 
            
        </h4>
    @endcomponent

    <form action="{{ route('config.salvar') }}" method="POST" enctype="multipart/form-data" >
        {{ csrf_field() }}
        <div class="row">
            @component('components.painel', ['colunas' => 8])
                <h4>Informações do site</h4>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="">Titulo</label>
                        <input name="titulo" class="form-control" type="text" value="{{ Configuracao::getValue('titulo') }}">
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="">Descrição</label>
                        <textarea name="descricao" class="form-control" style="height: 100px" type="text" >{{ Configuracao::getValue('descricao') }}</textarea>
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="">Palavras-chave (separadas por virgula)</label>
                        <input  name="palavras_chave" class="form-control" type="text" value="{{ Configuracao::getValue('palavras_chave') }}">
                    </div>
                </div>

                <h4>Identidade do Site</h4>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="">Logo</label> <br>
                        <label for="logo" class="label label-primary" style="cursor:pointer"><i class="fa fa-image"></i>  Selecionar imagem</label>
                        <input style="display: none" id="logo" name="logo" class="form-control" type="file"> <br>
                        <img width="100px" src="{{ asset('public/'. Configuracao::getValue('logo')) }}" alt="">
                    </div>
                    <div class="col-md-6">
                        <label for="">Favicon</label> <br>
                        <label for="favicon" class="label label-primary" style="cursor:pointer"><i class="fa fa-image"></i>  Selecionar imagem</label>
                        <input style="display: none" id="favicon" name="favicon" class="form-control" type="file"> <br>
                        <img width="100px" src="{{ asset('public/' . Configuracao::getValue('favicon')) }}" alt="">
                    </div>
                </div>

                <h4>Informações de Contato</h4>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="">Email (Para colocar mais emails separe por virgula)</label> <br>
                        <input name="email" class="form-control" type="text" value="{{ Configuracao::getValue('email') }}">
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="">Google Maps</label> <br>
                        <textarea name="google_maps" class="form-control"  style="height: 100px" type="text" >{{ Configuracao::getValue('google_maps') }}</textarea>
                    </div>
                </div>
                
                
            @endcomponent

            @component('components.painel', ['colunas' => 4])
                <h4>Informações de SEO</h4>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="">Google analitycs <br>(ANALYTICS ID : [informe o ID, começando com UA-]</label>
                        <input name="google_analytic" class="form-control" type="text" value="{{ Configuracao::getValue('analytics') }}" placeholder="UA-18273467-9">
                    </div>
                </div>

                <h4>Configurações sobre as publicações</h4>

                <div class="checkbox checkbox-primary">
                    <input id="checkbox" name="permitir_comentarios" type="checkbox" {{ Configuracao::getValue('permitir_comentarios') ? 'checked' : '' }}>
                    <label for="checkbox" > Permitir comentários nas publicações  </label>
                </div>

                <br><br>
                <div class="row">
                    <div class="col-md-12" align="right">
                        <button type="submit"class="btn btn-default btn-rounded">Salvar alterações</button>
                    </div>
                </div>
            @endcomponent
        </div>
    </form> 

@stop