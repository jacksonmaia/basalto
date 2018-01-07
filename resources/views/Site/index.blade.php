@include('Site.include.head')
@include('Site.include.top')
<script type="text/javascript" src="{!! asset('js/Site/responsiveslides.min.js') !!}"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>
<div class="slider">
    <div class="container">
        <div class="callbacks_container">
            <ul class="rslides" id="slider">
                <li>
                    <h3>A escolha ideal para construir o seu sonho.</h3>
                </li>
 <!--
                <li>
                    <h3>In front of me black cat crossed the road.</h3>
                </li>
                <li>
                    <h3>What's meant to be will always find a way.</h3>
                </li>
-->
            </ul>
        </div>
    </div>
</div>
<!----->
<div class="container">
    <div class="signin-section">
        <h3>Quer saber um pouco mais sobre a Basalto Engenharia?</h3>
        <a class="signin" href="{{route('menu.contato')}}">Entre em contato</a>
        <a class="signup" href="{{route('menu.projeto')}}">Veja nossos projetos</a>
    </div>
</div>
<!----->

<div class="app">
    <div class="container">
        <div class="app-grid">
            <div class="col-md-4 app-info">
                <h3>{{$registro->titulo}}</h3>
                <p>{{$registro->descricao}}</p>
            </div>
            <div class="col-md-8 app-pic">
                <div id="slide">
                    <div class="container" style="width: 100% !important;">
                        <div id="da-slider" class="da-slider">
                            <div class="da-slide" style="width:100%;">
                                <div class="da-img" style="width:100%;">
                                    <img src="{{asset($registro->imagem1)}}" alt="{{$registro->titulo1}}" style="width:100%;">

                                </div>
                            </div>

                            <div class="da-slide" style="width:100%;">
                                <div class="da-img" style="width:100%;">
                                    <img src="{{asset($registro->imagem2)}}" alt="{{$registro->titulo2}}" style="width:100%;">
                                </div>
                            </div>

                            <div class="da-slide" style="width:100%;">
                                <div class="da-img" style="width:100%;">
                                    <img src="{{asset($registro->imagem3)}}" alt="{{$registro->titulo3}}" style="width:100%;">
                                </div>
                            </div>

                            <div class="da-slide" style="width:100%;">
                                <div class="da-img" style="width:100%;">
                                    <img src="{{asset($registro->imagem4)}}" alt="{{$registro->titulo4}}" style="width:100%;">
                                </div>
                            </div>

                            <div class="da-slide" style="width:100%;">
                                <div class="da-img" style="width:100%;">
                                    <img src="{{asset($registro->imagem5)}}" alt="{{$registro->titulo5}}" style="width:100%;">
                                </div>
                            </div>

                            <div class="da-slide" style="width:100%;">
                                <div class="da-img" style="width:100%;">
                                    <img src="{{asset($registro->imagem6)}}" alt="{{$registro->titulo6}}" style="width:100%;">
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@include('Site.include.footer')

<!-- slide -->

<script type="text/javascript" src="{!! asset('js/Site/jquery.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/Site/jquery.lettering.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/Site/jquery.cslider.js') !!}"></script>
<script type="text/javascript">
    $(function() {

        $('#da-slider').cslider({
            autoplay	: true,
            bgincrement	: 450
        });

    });
</script>
