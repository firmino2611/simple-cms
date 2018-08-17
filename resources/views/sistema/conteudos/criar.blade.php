@extends('templates.template')

@section('title') Conteudos < {{ Configuracao::getValue('titulo') }} @stop

@section('content')

    <form action="">    
        <div class="row">
            @component('components.painel', ['colunas' => 8])
                <h4>Publicar conteudos</h4>

                <div class="col-md-12 form-group">
                    <label for="">Titulo</label>
                    <input class="form-control" type="text" name="titulo">
                </div>

                <div class="col-md-12 form-group">
                    <label for="">Link do conteudo: {{ url('') }}/
                        <span id="slug" style="font-weight:bold">slug-do-titulo</span>
                        <input style="display: none" type="text" name="slug" value="slug-do-titulo">
                        <button style="display: none" type="button" id="salvar-slug" class="btn btn-xs btn-success">ok</button>
                        <button type="button" id="editar-slug" class="btn btn-xs btn-default">Editar</button>
                    </label>
                </div>

                <div class="col-md-12 form-group">
                    <label for="">Descricao</label>
                    <textarea class="form-control su" type="text" name="descricao"></textarea>
                </div>
            @endcomponent

            @component('components.painel', ['colunas' => 4])
                <h4>Publicar conteudos</h4>


            @endcomponent
        </div>
    </form>

@stop

@section('scripts')
    <!-- Bootstrap Tinymce -->
    <script type="text/javascript" src="{{ asset('public/sistema/js/tinymce/tinymce.min.js') }}"></script>
    <script src="https://cloud.tinymce.com/stable/plugins.min.js?apiKey=hns3dolk20bj7j3tmmcnx03dhhu1w32n4urp91ct9tmx6m89"></script>
    <script>
        function string_to_slug (str) {
            str = str.replace(/^\s+|\s+$/g, ''); // trim
            str = str.toLowerCase();
        
            // remove accents, swap ñ for n, etc
            var from = "âàãáäâêèéëêìíïîôòóöôùúüûñç·/_,:;";
            var to   = "aaaaaaeeeeeiiiiooooouuuunc------";
            for (var i=0, l=from.length ; i<l ; i++) {
                str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }

            str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
                .replace(/\s+/g, '-') // collapse whitespace and replace by -
                .replace(/-+/g, '-'); // collapse dashes

            return str;
        }
        $(function(){
            $('#editar-slug').click(function(){
                $('input[name=slug]').show('fast')
                $('#salvar-slug').show('fast')
                $('#editar-slug').hide('fast')
            })

            $('#salvar-slug').click(function(){
                $('input[name=slug]').hide('fast')
                $('#salvar-slug').hide('fast')
                $('#editar-slug').show('fast')
            })
            $('input[name=slug]').keyup(function(){
                $('#slug').text(string_to_slug($(this).val()))
            })
        })

        tinymce.init({
            selector: 'textarea',
            height: '200px',
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor textcolor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code help wordcount',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
            ],
            toolbar1: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
            toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css']
            });
    </script>
@stop