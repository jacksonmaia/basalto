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
                    <li><i class="fa fa-home"></i><a href="index.html">Início</a></li>
                    <li><i class="icon_document_alt"></i>Perfil</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Perfil
                    </header>
                    @if( isset($errors) && count($errors) > 0)
                      <div class="alert alert-danger">
                        <p>Perfil não atualizado, preencha todos os campos</p>
                      </div>
                    @endif
                    <div class="panel-body">
                        <div class="form">
                          @foreach($registros as $registro)
                            <form class="form-validate form-horizontal " id="register_form" method="get" action="{{ route('admin.perfil.editar', $registro->id) }}" enctype="multipart/form-data">
                                <center>
                                    {{ csrf_field() }}
                                    <div class="form-group ">
                                        <img src="{{asset($registro->foto)}}" style="width: 120px;height: 150px;border-radius: 6px;"/>
                                    </div>

                                    <div class="form-group ">
                                        <label for="fullname" class="control-label col-lg-2">Nome <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="fullname" name="fullname" type="text" value="{{$registro->name}}" disabled/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="address" class="control-label col-lg-2">Email <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="address" name="address" type="text" value="{{$registro->email}}" disabled/>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="address" class="control-label col-lg-2">Senha <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="address" name="address" type="password" value="{{$registro->password}}" disabled/>
                                        </div>
                                    </div>
                                    @endforeach
                                </center>

                                <br>
                                <br>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="submit">Editar</button>
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
