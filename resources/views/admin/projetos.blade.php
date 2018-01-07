@include('admin.include.head')
@include('admin.include.top')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/Admin/estilo.css')}}">
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
              @if( isset($errors) && count($errors) > 0)
                <div class="alert alert-danger">
                  <p>Projeto não cadastrado/atualizado, preencha todos os campos</p>
                </div>
              @endif
              <h3 class="page-header"><i class="fa fa-files-o"></i> Projetos</h3>
              <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="{{route('admin.index')}}">Início</a></li>
                  <li><i class="icon_document_alt"></i>Projetos</li>
                  <li><i class="fa fa-files-o"></i>Projetos</li>
              </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Listas de projetos
                    </header>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Título</th>
                                <th>Descrição</th>
                                <th>Imagem 1</th>
                                <th>Imagem 2</th>
                                <th>Imagem 3</th>
                                <th>Imagem 4</th>
                                <th>Imagem 5</th>
                                <th>Imagem 6</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($registros as $registro)
                            <tr>
                                <td>{{$registro->titulo}}</td>
                                <td>{{$registro->descricao}}</td>
                                <td>{{$registro->imagem1}}</td>
                                <td>{{$registro->imagem2}}</td>
                                <td>{{$registro->imagem3}}</td>
                                <td>{{$registro->imagem4}}</td>
                                <td>{{$registro->imagem5}}</td>
                                <td>{{$registro->imagem6}}</td>
                                <td>
                                  <a class="btn btn-danger" href="{{route('admin.apagar.projeto', $registro->id)}}"><i class=" icon_close_alt2" data-toggle="tooltip" title="Excluir"></i></a>

                                  <!--<a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                  <a class="btn btn-danger" href="{{route('admin.contatos.apagar', $registro->id)}}"><i class="icon_close_alt2" data-toggle="tooltip" title="Excluir"></i></a>

                                  <a href="{{route('admin.apagar.projeto', $registro->id)}}" class="icon-apagar"><i class="glyphicon glyphicon-remove" data-toggle="tooltip" title="Apagar"></i></a>-->
                                  <a href="{{route('admin.editar.projeto', $registro->id)}}" class="btn btn-primary"><i class="icon_pencil-edit" data-toggle="tooltip" title="Editar"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </section>
            </div>
        </div>

    </section>
</section>

</section>
@include('admin.include.footer')
