@include('admin.include.head')
@include('admin.include.top')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-files-o"></i> Novo projeto</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ route('admin.index') }}">Início</a></li>
                    <li><i class="icon_document_alt"></i>Projetos</li>
                    <li><i class="fa fa-files-o"></i>Novo projeto</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Advanced Form validations
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal " id="register_form"  method="post"  action="{{ route('admin.salvar.projeto') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group ">
                                    <label for="fullname" class="control-label col-lg-2">Título <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="fullname" name="titulo" type="text"/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2">Descrição <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="address" name="descricao" type="text" />
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2">Imagem1 <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="address" name="imagem1" type="file" />
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2">Imagem2 <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="address" name="imagem2" type="file" />
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2">Imagem3 <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="address" name="imagem3" type="file" />
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2">Imagem4 <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="address" name="imagem4" type="file" />
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2">Imagem5 <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="address" name="imagem5" type="file" />
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2">Imagem6 <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="address" name="imagem6" type="file" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                        <button class="btn btn-default" type="button"><a href="{{ route('admin.index') }}">Cancel</a></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>

</section>
@include('admin.include.footer')
