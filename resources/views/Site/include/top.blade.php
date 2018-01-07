<body>
<!---->
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="{{route('menu.index')}}"><img src="{!! asset('img/logo.png') !!}"  class="img_nov" alt=""></a>
        </div>
        <div class="top-menu">
            <span class="menu"> </span>
            <ul>
                <li><a href="{{route('menu.index')}}">Início</a></li>
                <li><a href="{{route('menu.sobre')}}">Basalto</a></li>
                <li><a href="{{route('menu.projeto')}}">Projetos</a></li>
                <li class="top-contact"><a href="{{route('menu.contato')}}">Contato</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <!--script-nav-->
        <script>
            $("span.menu").click(function(){
                $(".top-menu ul").slideToggle("slow" , function(){
                });
            });
        </script>
    </div>
</div>
<!--header-->