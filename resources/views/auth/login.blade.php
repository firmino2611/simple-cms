<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Foxlabel | Login Page</title>
    <!-- Css Files -->
    <link href="{{ asset('public/sistema/css/root.css')}}" rel="stylesheet">
    <style type="text/css">
        body {
            background: #F5F5F5;
        }
        html, body{
            height: 100%;
            width: 100%
        }
    </style>
</head>
<body >
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 " style="margin-top: 100px">
                <br>

                <form class="form-horizontal" style="box-shadow: 5px 5px 20px 2px rgba(0,0,0,.5); padding: 20px" action="{{ route('login.autenticar') }}" method="POST">
                    {{ csrf_field() }}
                    <img src="" alt="" id="logo">
                    <h3 align="center">Painel de administrativo</h3>

                    @if(Session::has('erro'))
                        @component('components.alerta', ['icone'=>'window-close', 'alerta'=>6])
                            {{ Session::get('erro')['mensagem'] }}
                        @endcomponent
                    @endif
                    <div class="form-group">
                        <label class="col-sm-12 control-label form-label">Entre com seu email ou usuario</label>
                        <div class="col-sm-12">
                            <input type="text" name="usuario" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12 control-label form-label">Senha</label>
                        <div class="col-sm-12">
                            <input type="password" name="senha" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10 checkbox checkbox-primary padding-l-35">
                            <input id="checkbox103" type="checkbox" checked="">
                            <label for="checkbox103">Manter logado</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-12 ">
                            <button type="submit" class="btn btn-block btn-default">ENTRAR</button>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-12 ">
                            <a href="registrar.html" class="">Ainda não possui uma conta? Faça seu cadastro</a>
                        </div>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
</body>
</html>