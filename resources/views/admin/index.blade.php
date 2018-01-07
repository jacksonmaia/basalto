@include('admin.include.head')
@include('admin.include.top')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> Painel de controle</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ route('admin.index') }}">Home</a></li>
                    <li><i class="fa fa-laptop"></i>Painel de controle</li>
                </ol>
            </div>
        </div>

        <div class="row">
		<h1 style="width: 100%;text-align: center;margin-top: 12%;font-size: 3.4em">Seja bem vindo ao gerenciador</h1>

        </div>




    </section>
</section>
<!--main content end-->
</section>
<!-- container section start -->

@include('admin.include.footer')
