@include('admin.include.head')
@include('admin.include.top')

<style>
    .form-control {
        width: 70%;
    }
</style>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-files-o"></i> Novo projeto</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ route('admin.index') }}">Início</a></li>
                    <li><i class="icon_document_alt"></i>Editar Perfil</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Editar Perfil
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal " id="register_form" method="post" action="{{ route('admin.perfil.atualizar', $registros->id) }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="put">
                                <center>
                                    <div class="form-group ">
                                        <label for="fullname" class="control-label col-lg-2">Foto <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" type="file" name="foto" >
                                        </div>
                                    </div>


                                    <div class="form-group ">
                                        <label for="fullname" class="control-label col-lg-2">Nome <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="fullname" name="name" type="text" value="{{$registros->name}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="address" class="control-label col-lg-2">Email <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="address" name="email" type="text" value="{{$registros->email}}"/>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="address" class="control-label col-lg-2">Senha <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="address" name="password" type="password" value="{{$registros->password}}"/>
                                        </div>
                                    </div>
                                </center>
                                <br>
                                <br>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="submit">Salvar</button>
                                        <button class="btn btn-default" type="button"><a href="{{ route('admin.perfil') }}">Cancel</a></button>
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
