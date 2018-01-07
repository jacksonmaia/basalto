<link href="{{ asset('css/Site/responsiveslides.css') }}" rel="stylesheet">
<link href="{{ asset('css/Site/slideProj.css') }}" rel="stylesheet">
<script type="text/javascript" src="{!! asset('js/Site/responsiveslides.min.js') !!}"></script>

<script>
    // You can also use "$(window).load(function() {"
    $(function () {

        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: false,
            pager: false,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>

<!-- MODAL -->

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="Modal-label-1">{{($registros->titulo)}}</h4>
</div>
<div class="modal-body">
    <!-- SLIDE -->
    <div id="wrapper">
        <div class="callbacks_container">
            <ul class="rslides" id="slider4">
                <li><img src="{{asset($registros->imagem1)}}" alt=""/></li>
                <li><img src="{{asset($registros->imagem2)}}" alt=""/></li>
                <li><img src="{{asset($registros->imagem3)}}" alt=""/></li>
                <li><img src="{{asset($registros->imagem4)}}" alt=""/></li>
                <li><img src="{{asset($registros->imagem5)}}" alt=""/></li>
                <li><img src="{{asset($registros->imagem6)}}" alt=""/></li>
            </ul>
            <a href="#" class="callbacks_nav callbacks1_nav prev">Previous</a>
            <a href="#" class="callbacks_nav callbacks1_nav next">Next</a>
        </div>
    </div>
    <!-- FIM SLIDE -->

    <p>{{($registros->descricao)}}</p>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

<!-- FIM MODAL -->
