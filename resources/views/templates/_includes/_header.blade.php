<div id="top" class="clearfix"> 
    <!-- Start App Logo -->
    <div class="applogo"> <a href="#" data-toggle="modal" data-target="#info" class="logo">Mobiplus</a> </div>
    <!-- End App Logo --> 
    <!-- Start Sidebar Show Hide Button --> 
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a> <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a> 
    <!-- End Sidebar Show Hide Button --> 
    <!-- Start Searchbox -->
    {{-- <form class="searchform">
        <input type="text" class="searchbox" id="searchbox" placeholder="Search for something...">
        <span class="searchbutton"><i class="fa fa-search"></i></span>
    </form> --}}
    <!-- End Searchbox --> 

    <!-- Start Sidepanel Show-Hide Button --> 
    {{-- <a href="#sidepanel" class="sidepanel-open-button"><i class="fa fa-outdent"></i></a>  --}}
    <!-- End Sidepanel Show-Hide Button --> 

    <!-- Start Top Right -->
    <ul class="top-right">
        <li class="dropdown dropdown-notification nav-item link"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label count-info"><span class="label label-warning">6</span><i class="fa fa-envelope" aria-hidden="true"></i></a>
            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right top-width">
                <li class="dropdown-menu-header">
                    <h6 class="dropdown-header"><span>Notifications</span><span class="pull-right label label-danger">6 New</span></h6>
                </li>
                <li class="list-group">
                    <a href="#" class="list-group-item">
                        <div class="media">
                            <div class="media-body">
                                <h6 class="media-heading color10"><i class="fa fa-shopping-cart"></i> You have new order!</h6>
                                <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                <small>
                                    <time datetime="2017-02-14 20:00" class="media-meta text-muted">30 minutes ago</time>
                                </small>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item">
                        <div class="media">
                            <div class="media-body">
                                <h6 class="media-heading darken-1 color7"><i class="fa fa-desktop"></i> 99% Server load</h6>
                                <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p>
                                <small>
                                    <time datetime="2017-02-14 20:00" class="media-meta text-muted">30 minutes ago</time>
                                </small> 
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item">
                        <div class="media">
                            <div class="media-body">
                                <h6 class="media-heading color9"><i class="fa fa-server"></i> Warning notifixation</h6>
                                <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p>
                                <small>
                                    <time datetime="2017-02-14 20:00" class="media-meta text-muted">30 minutes ago</time>
                                </small> 
                            </div>
                        </div>
                    </a>
                </li>
                <li class="dropdown-menu-footer"><a href="#" class="dropdown-item text-muted text-center">Read all notifications</a></li>
            </ul>
        </li>
       
        <li class="dropdown link"> <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><img src="{{ asset('public/sistema/img/profileimg.png') }}" alt="img"><b></b> {{ Auth::user()->nome }}<span class="caret"></span></a>
            <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
                <li role="presentation" class="dropdown-header">OPÇÕES</li>
                {{-- <li><a href="#"><i class="fa falist fa-inbox"></i>Inbox<span class="badge label-danger">2</span></a></li> --}}
                <li><a href="#"><i class="fa falist fa-user"></i>Perfil</a></li>
                <li><a href="#"><i class="fa falist fa-wrench"></i>Configurações</a></li>
                <li class="divider"></li>
                <li><a href="{{ route('logout') }}"><i class="fa falist fa-power-off"></i> Sair</a></li>
            </ul>
        </li>
    </ul>
    <!-- End Top Right --> 
</div>
