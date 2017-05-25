<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>BSOne | </title>
    
    <!-- Bootstrap -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">

</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
					{!! BootForm::open(['url' => url('/password/reset'), 'method' => 'post']) !!}
                    <h1>Trocar Senha</h1>
                    
                    {!! BootForm::hidden('token', $token) !!}
	
					{!! BootForm::email('email', 'Email', old('email'), ['placeholder' => 'Email']) !!}
	
					{!! BootForm::password('password', 'Senha', ['placeholder' => 'Password']) !!}
	
					{!! BootForm::password('password_confirmation', 'Confirme a senha', ['placeholder' => 'Confirme']) !!}
	
					{!! BootForm::submit('Enviar link', ['class' => 'btn btn-default col-md-9']) !!}
	
					<div class="clearfix"></div>
					
                    <div class="separator">
                        <p class="change_link">Você tem acesso?
                            <a href="{{ url('/login') }}" class="to_register"> Acessar </a>
                        </p>
                        
                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> BSOne</h1>
                            <p>©2017 All Rights Reserved. BSOne Informática</p>
                        </div>
                    </div>
                {!! BootForm::close() !!}
            </section>
        </div>
    </div>
</div>
</body>
</html>