<div class="sidebar clearfix">
    <ul class="sidebar-panel nav metismenu" id="side-menu" data-plugin="metismenu">
        <li><a href="{{ route('dashboard') }}"><span class="icon color7"><i class="fa fa-home" aria-hidden="true"></i></span>Dashboard</a></li>

        <li class="sidetitle">GERENCIA</li>    

        {{-- <li><a href="#"><span class="icon color5"><i class="fa fa-home" aria-hidden="true"></i></span><span class="nav-title">Dashboard</span> <i class="fa fa-sort-desc caret"></i></a>
            <ul>
                <li><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Dashboard 1</a></li>
                <li><a href="index-2.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Dashboard 2</a></li>
                <li><a href="index-3.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Dashboard 3</a></li>
            </ul>
        </li> --}}
                   
        @role('admin')
            <li><a href="{{ route('usuarios.listar') }}"><span class="icon color7"><i class="fa fa-users" aria-hidden="true"></i></span>Clientes</a></li>
        @endrole
        <li><a href="{{ route('produtos.listar') }}"><span class="icon color7"><i class="fa fa-users" aria-hidden="true"></i></span>Produtos</a></li>

        <br>
        <li class="sidetitle">COMUNICAÇÃO</li>    

        <li><a href="mailbox.html"><span class="icon color6"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>Mailbox<span class="label label-danger">em breve</span></a></li>
        
    </ul>
</div>