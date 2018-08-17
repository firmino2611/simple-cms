@extends('templates.template')

@section('title') Conteudos < {{ Configuracao::getValue('titulo') }} @stop

@section('content')


    <div class="row">
        @component('components.painel', ['colunas' => 12])
            <h4>Conteudos <a href="{{ route('conteudos.criar') }}" class="btn btn-default">Adicionar novo</a></h4>
            <div class="row">
                <div class="col-md-12">
                    <a href="" class="btn btn-xs btn-primary">Tudo ({{ count($conteudos) }})</a> 
                    <a href="" class="btn btn-xs btn-{{ isset($filtro['publicados']) ? 'default' : 'primary' }}">Publicados ({{ count($publicados) }})</a> 
                    <a href="" class="btn btn-xs btn-{{ isset($filtro['inativos']) ? 'default' : 'primary' }}">Inativos ({{ count($inativos) }})</a> 
                </div>
            </div> <br><br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Categorias</th>
                        <th>Comentarios</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @if(count($conteudos)) --}}
                        @foreach($conteudos as $conteudo)
                            <tr>
                                <td>{{ $conteudo->titulo }}</td>
                                <td>{{ $conteudo->autor->nome }}</td>
                                <td>{{ $conteudo->categorias }}</td>
                                <td>{{ count($conteudo->comentarios) ?? '-' }}</td>
                                <td>{{ $conteudo->created_at->format('d/m/Y') }}</td>
                            </tr>
                        @endforeach
                    {{-- @else
                        <tr>
                            <td colspan="5" style="font-size: 16pt" align="center">Nenhum conteudo publicado</td>
                        </tr>
                    @endif --}}
                </tbody>
                <tfooter>
                    <tr>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Categorias</th>
                        <th>Comentarios</th>
                        <th>Data</th>
                    </tr>
                </tfooter>
            </table>
        @endcomponent
    </div>
    


@stop