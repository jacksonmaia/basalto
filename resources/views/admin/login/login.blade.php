<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login | Acesso</title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/Admin/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{asset('css/Admin/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{asset('css/Admin/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/Admin/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="{{asset('css/Admin/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/Admin/style-responsive.css')}}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/Admin/html5shiv.js')}}"></script>
    <script src="{{asset('js/Admin/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body class="login-img3-body">

<div class="container">

    <form class="login-form" action="{{route('admin.login.entrar')}}" method="post">
        {{ csrf_field() }}
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input type="text" class="form-control" name="email" placeholder="Email:" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Senha:">
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        </div>
    </form>
    <div class="text-right">
        <div class="credits">
            <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
            -->
        </div>
    </div>
</div>


</body>
</html>
