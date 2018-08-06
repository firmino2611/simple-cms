<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <title>@yield('title')</title>
        <link rel="shortcut icon" href="{{ asset('public/'. Configuracao::getValue('favicon')) }}" type="image/x-icon">
        <!-- Css Files -->
        <link href="{{ asset('public/sistema/css/root.css') }}" rel="stylesheet">
        <style>
            .page-content{
                padding-top: 0px
            }
            .btn{
                cursor: pointer;
                font-weight: bold
            }
            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
            }

            main {
                flex: 1 0 auto;
            }
     
        </style>
        @yield('head')
    </head>
    <body>
        <!-- Start Page Loading -->
        <div class="loading"><img src="{{ asset('public/sistema/img/loading.gif') }}" alt="loading-img"></div>
        <!-- End Page Loading --> 
        <!-- Start Top -->
        @include('templates._includes._header')
        <!-- End Top --> 
        <!-- Start Sidabar -->
        @include('templates._includes._sidebar')
        <!-- End Sidabar --> 
            <!-- Start Content -->
            <main class="page-content" style="heigth: 100vh">  
               
                <!-- Start Container -->
                <div class="container-default animated fadeInRight"> <br>
                    @if(Session::has('alerta'))
                        @component('components.alerta' , ['alerta' => Session::get('alerta')['alerta'] ])
                            {{ Session::get('alerta')['mensagem'] }}
                        @endcomponent
                    @endif

                    @yield('content')

                   

                </div>
                <!-- End Container --> 
                <!-- Start Footer -->
                {{-- @include('templates._includes._footer') --}}
                <!-- End Footer --> 
            </main>
           

            @yield('modais')

            <!-- Informacoes do sistema -->
            <div class="modal fade" id="info" tabindex="0" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">INFORMAÇÕES DO SISTEMA</h5>
                        </div>
                        <div class="modal-body">
                            <p><strong>Desenvolvedor</strong> Action Solucoes Tecnologicas</p>
                            <p><strong>Versao do sistema</strong> 0.0.1 Beta</p>
                           
                        </div>
                        <div class="modal-footer">
                            Copyright &copy; {{ date('Y') }} Action ST All rights reserved.
                            {{-- <button type="button" class="btn btn-default" data-dismiss="modal">FECHAR</button> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content --> 
            <!-- Start Sidepanel -->
            {{-- @include('templates._includes._sidepanel') --}}
            <!-- End Sidepanel --> 
        <!-- jQuery Library --> 
        <script type="text/javascript" src="{{ asset('public/sistema/js/jquery.min.js') }}"></script> 
        <!-- Bootstrap Core JavaScript File --> 
        <script src="{{ asset('public/sistema/js/bootstrap/tether.min.js') }}"></script>
        <script src="{{ asset('public/sistema/js/bootstrap/bootstrap.min.js') }}"></script> 
        <!-- Plugin.js - Some Specific JS codes for Plugin Settings --> 
        <script type="text/javascript" src="{{ asset('public/sistema/js/plugins.js') }}"></script>
        <!-- Sweet Alert -->
        <script src="{{ asset('public/sistema/js/sweet-alert/sweet-alert.min.js') }}"></script>
        <!-- Moment JS -->
        <script type="text/javascript" src="{{ asset('public/sistema/js/moment/moment.min.js') }}"></script>
        <!-- MetisMenu --> 
        <script type="text/javascript" src="{{ asset('public/sistema/js/metismenu/metisMenu.min.js') }}"></script>
        <!-- Bootstrap Select -->
        <script type="text/javascript" src="{{ asset('public/sistema/js/bootstrap-select/bootstrap-select.js') }}"></script>
        <!-- Bootstrap Toggle -->
        <script type="text/javascript" src="{{ asset('public/sistema/js/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
       
        @yield('scripts')

        <script>
            $(function(){
                // $('.table').DataTable({
                //     "columnDefs": [
                //         {"orderable": true}
                //     ],
                //     "language": {
                //         "zeroRecords": "Nenhuma informação encontrada",
                //         "infoEmpty": "Mostrando 0 resultados encontrados",
                //         "infoFiltered":   "(filtro aplicado nas _MAX_ entradas)",
                //         "info":  "Mostrando _START_ a _END_ do total de _TOTAL_ encontradas",
                //         "search": "Pesquisa:",
                //         "lengthMenu":     "Mostrar _MENU_ resultados",
                //         "paginate": {
                //             "first":      "First",
                //             "last":       "Last",
                //             "next":       "Próximo",
                //             "previous":   "Anterior"
                //         },
                //     }
                // });
            })
        </script>
    </body>
</html>