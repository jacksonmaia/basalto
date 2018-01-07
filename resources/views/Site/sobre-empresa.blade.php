@include('Site.include.head')

@include('Site.include.top')

<div class="about">
    <div class="about-info">
        <div class="container">
            <a href="{{route('menu.index')}}">Home/</a><h2>Sobre</h2>
        </div>
    </div>
    <div class="container">
            <div class="about-text">

                <h3>Historia da Basalto Engenharia: </h3>
                <br>
                <img src="{!! asset('img/empresa.jpg') !!}" alt="" class="sobre-img">
                @foreach($registros as $registro)
                    @if($registro->id == 1)
                        <p>{{$registro->texto}}</p>
                    @endif
                @endforeach
            </div>
            <div class="about-sec">
                <div class="col-md-4 about-grid">
                    <img src="{!! asset('img/missao.png') !!}" alt=""/>
                @foreach($registros as $registro)
                    @if($registro->id == 2)
                        <p>{{$registro->texto}}</p>
                    @endif
                @endforeach
                </div>
                <div class="col-md-4 about-grid">
                    <img src="{!! asset('img/visao.PNG') !!}" alt=""/>
                @foreach($registros as $registro)
                    @if($registro->id == 3)
                        <p>{{$registro->texto}}</p>
                    @endif
                @endforeach

                </div>
                <div class="col-md-4 about-grid">
                    <img src="{!! asset('img/valores.PNG') !!}" alt=""/>
                @foreach($registros as $registro)
                    @if($registro->id == 4)
                        <p>{{$registro->texto}}</p>
                    @endif
                @endforeach
                </div>
                <div class="clearfix"></div>
            </div>
    </div>
</div>


@include('Site.include.footer')
