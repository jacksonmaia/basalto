<body>
<!-- container section start -->
<section id="container" class="">
    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="{{ route('admin.index') }}" class="logo">Basalto <span class="lite">Admin</span></a>
        <!--logo end-->
        <a href="{{ route('login.sair') }}"><div id="sair"><p>Sair</p></div></a>

    </header>
    <!--header end-->


    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="{{ route('admin.index') }}">
                        <i class="icon_house_alt"></i>
                        <span>Início</span>
                    </a>
                </li>

                <li>
                    <a class="" href="{{ route('admin.contatos') }}">
                        <i class="icon_comment"></i>
                        <span>Contato</span>
                    </a>
                </li>


                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_genius"></i>
                        <span>Projetos</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{ route('admin.cadastrar.projeto') }}">Novo Projeto</a></li>
                        <li><a class="" href="{{ route('admin.projetos') }}">Ver Projetos</a></li>
                    </ul>
                </li>


                <li>
                    <a class="" href="{{ route('admin.textos') }}">
                        <i class="icon_documents_alt"></i>
                        <span>Textos do site</span>
                    </a>
                </li>

                <li>
                    <a class="" href="{{ route('admin.perfil') }}">
                        <i class="fa fa-user"></i>
                        <span>Perfil</span>
                    </a>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
