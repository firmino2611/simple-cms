@extends('templates.template')

@section('title') Dashboard @stop

@section('content')

    <!-- Page header -->
    @component('components.page-header', ['itens' => [
        ['nome' => 'Dashboard', 'ativo' => true]
    ]])
        @slot('titulo') Dashboard @endslot
    @endcomponent
    <!-- ./Page header -->

    <div class="row">
        @component('components.painel', ['colunas' => 12])
            <h3>Em breve...</h3>
        @endcomponent
    </div>
    


@stop