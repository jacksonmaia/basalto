@include('Site.include.head')
@include('Site.include.top')

<div class="contact">
    <div class="contact-info">
        <div class="container">
            <a href="{{route('menu.index')}}">Home/</a><h2>Contato</h2>
        </div>
    </div>
    <div class="container">
        <!-- 		 <p class="class-para"></p>
         -->		 <div class="col-md-7 contact-para">
             @if( isset($errors) && count($errors) > 0)
               <div class="alert alert-danger">
                 <p>Contato não realizado, por favor, preencha todos os campos !!</p>
               </div>
             @endif

            <h5>Formulario de contato</h5>
            <form method="post" action="{{route('menu.salvar.contato')}}">
                {{ csrf_field() }}
                <div class="grid-contact">
                    <div class="col-md-6 contact-grid">
                        <p >Primeiro nome</p>
                        <input type="text" name="name" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                    </div>
                    <div class="col-md-6 contact-grid">
                        <p >Sobrenome</p>
                        <input type="text" name="sobrenome" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="grid-contact">
                    <div class="col-md-6 contact-grid">
                        <p >Endereço de e-mail</p>
                        <input type="text" name="email" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                    </div>
                    <div class="col-md-6 contact-grid">
                        <p >Telefone</p>
                        <input type="text" name="telefone" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <p class="your-para">Mensagem</p>
                <textarea cols="77" rows="6" name="mensagem" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"></textarea>
                <div class="send">
                    <input type="submit" value="Enviar mensagem" >
                </div>
            </form>
        </div>
        <div class="col-md-5 map">
            <h5>Encontre-nos aqui</h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d826.4733322982601!2d-38.49504773435492!3d-4.099529896917127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b8b00149e12153%3A0xba87c00a25f9a426!2sHorizonte%2C+CE%2C+62880-000%2C+Brasil!5e0!3m2!1spt-BR!2sin!4v1502941283240" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>

@include('Site.include.footer')
