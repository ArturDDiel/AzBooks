<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>

    <style>
        body {
            align-items: center;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: gray;
        }

        a:hover {
            text-decoration: none;
            color: gray;
        }

        .pagina {
            width: 100px;
            height: 40px;
            color: blue;
            border-bottom: 2px solid blue;
            display: inline-block;
        }

        .pagina-desativada {
            width: 100px;
            height: 40px;
            border-bottom: 2px solid #acacac;
            display: inline-block;
        }

        .form-control {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>

<body class="container-fluid">

    <x-jet-validation-errors class="mb-4" />

    <img style="max-width: 200px; margin-top: 5%; margin-bottom: 2%;" src="https://live.staticflickr.com/65535/52323526060_dcaeb33cac_z.jpg" alt="">

    <div class="mb-3">
        <a class="pagina-desativada" href="{{ route('login') }}">
            <span>Acessar</span>
        </a>
        <span class="pagina">Cadastrar-se</span>
    </div>

    <form class="container" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder='Nome'/>
        </div>

        <div class="mb-3">
            <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required placeholder='Email'/>
        </div>

        <div class="mb-3">
            <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" placeholder='Senha'/>
        </div>

        <div class="mb-3">
            <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder='Confirmar Senha'/>
        </div>

        <x-jet-button class="btn btn-primary">
            {{ __('Register') }}
        </x-jet-button>
    </form>
</body>