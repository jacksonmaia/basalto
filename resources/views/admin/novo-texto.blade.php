@include('admin.include.head')
@include('admin.include.top')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> Textos do site</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{route('admin.index')}}">Início</a></li>
                    <li><i class="icon_document_alt"></i>Texto</li>
                    <li><i class="fa fa-file-text-o"></i>Novo Texto</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <section class="panel">
                    <div class="panel-body">
                        <form class="form-horizontal " method="post " action="{{route('admin.textos.show')}}">
                            <div class="form-group">
                                <label class="control-label col-lg-2" for="inputSuccess">Escolher tipo do texto</label>
                                <div class="col-lg-10">

                                    <select class="form-control input-lg m-bot15" id="select" name="select">
                                        <option value="0">Selecione um tipo</option>
                                        <option value="1" name="historia">Historia</option>
                                        <option value="2" name="missao">Missão</option>
                                        <option value="3" name="visao">Visão</option>
                                        <option value="4" name="valores">Valores</option>
                                    </select>
                                    <button class="btn btn-primary" type="submit">Ver Texto</button>
                                </div>
                            </div>
                            <p>Quantidade Maxima de caracteres: 00</p>
                            <p>Quantidade Minimima de caracteres: 00</p>
                        </form>
                    </div>
                </section>

            </div>
        </div>
        <!-- Basic Forms & Horizontal Forms-->

        <!-- <div class="row">
            <div class="col-lg-12">

                <div class="row">


                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Editor
                            </header>
                            <div class="panel-body">
                                <div id="editor" class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- page end-->
    </section>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</section>
@include('admin.include.footer')
