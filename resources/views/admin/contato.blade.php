@include('admin.include.head')
@include('admin.include.top')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-table"></i> Contato</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{route('admin.index')}}">Início</a></li>
                    <li><i class="fa fa-table"></i>Contato</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Contatos
                    </header>

                    <table class="table table-striped table-advance table-hover">
                        <thead>
                          <tr>
                              <th><i class="icon_profile"></i>Nome</th>
                              <th><i class="icon_profile"></i>Sobrenome</th>
                              <th><i class="icon_mail_alt"></i>Email</th>
                              <th style="width: 125px"><i class="icon_mobile"></i>Telefone</th>
                              <th style="width: 100px"><i class="icon_cogs"></i>Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($registros as $registro)
                        <tr>
                            <td>{{$registro->name}}</td>
                            <td>{{$registro->sobrenome}}</td>
                            <td>{{$registro->email}}</td>
                            <td>{{$registro->telefone}}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" data-whatevername="{{$registro->name}}" data-whateversobrenome="{{$registro->sobrenome}}" data-whateveremail="{{$registro->email}}" data-whatevertelefone="{{$registro->telefone}}" data-whatevermsg="{{$registro->mensagem}}" href="#" data-toggle="modal" data-target="#janela"><i class=" icon_zoom-in_alt" data-toggle="tooltip" title="Ver mais"></i></a>

                                    <!--<a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>-->
                                    <a class="btn btn-danger" href="{{route('admin.contatos.apagar', $registro->id)}}"><i class="icon_close_alt2" data-toggle="tooltip" title="Excluir"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>
                <form class="modal fade" id="janela">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                          <span>&times;</span>
                        </button>
                        <h3 class="modal-title">Visualizar Contato</h3>
                      </div>

                      <div class="modal-body">
                        <h4 style="list">Nome: <small id="recipient-name" style="color:#b3adad; font-weight:bold;"></small></h4>
                        <h4>Sobrenome: <small id="recipient-sobrenome" style="color:#b3adad; font-weight:bold;"></small></h4>
                        <h4>Email: <small id="recipient-email" style="color:#b3adad; font-weight:bold;"></small></h4>
                        <h4>Telefone: <small id="recipient-telefone" style="color:#b3adad; font-weight:bold;"></small></h4>
                        <h4>Mensagem: <small id="recipient-msg" style="color:#b3adad; font-weight:bold;"></small></h4>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                      </div>
                    </div>
                  </div>
                </form>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>

</section>

@include('admin.include.footer')
<script type="text/javascript">
$('#janela').on('show.bs.modal', function (event) {
  var a = $(event.relatedTarget) // Button that triggered the modal
  var recipientname = a.data('whatevername')
  var recipientsobrenome = a.data('whateversobrenome')
  var recipientemail = a.data('whateveremail')
  var recipienttelefone = a.data('whatevertelefone')
  var recipientmsg = a.data('whatevermsg')
  // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('#recipient-name').text(recipientname)
  modal.find('#recipient-sobrenome').text(recipientsobrenome)
  modal.find('#recipient-email').text(recipientemail)
  modal.find('#recipient-telefone').text(recipienttelefone)
  modal.find('#recipient-msg').text(recipientmsg)
})
</script>
