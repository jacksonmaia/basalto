@include('Site.include.head')
@include('Site.include.top')
<div class="404-page">
    <div class="error-info">
        <div class="container">
            <a href="{{route('menu.index')}}">Home/</a><h2>Blog</h2>
        </div>
    </div>
    <div class="container">
        <div class="error-head">
            <h3><label>OOPS ...!</label> Esta página não é encontrada.</h3>
            <h1>404</h1>
            <h2>Error</h2>
            <a href="index.php">Voltar</a>
        </div>
    </div>
</div>

@include('Site.include.footer')
