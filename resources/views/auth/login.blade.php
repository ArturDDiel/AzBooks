<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
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

    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
    @endif

    <img style="max-width: 200px; margin-top: 5%; margin-bottom: 2%;" src="https://live.staticflickr.com/65535/52323526060_dcaeb33cac_z.jpg" alt="">

    <div class="mb-3">
        <span class="pagina">Acessar</span>
        <a class="pagina-desativada" href="{{ route('register') }}">
            <span>Cadastrar-se</span>
        </a>
    </div>

    <form class="container" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete='off' placeholder='Email' />
        </div>

        <div class="mb-3">
            <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder='Senha' />
        </div>

        <div class="mb-3 form-check">
            <label for="remember_me" class="flex items-center">
                <x-jet-checkbox id="remember_me" name="remember" class="form-check-input" />
                <span class="form-check-label">{{ __('Remember me') }}</span>
            </label>
        </div>

        <x-jet-button class="btn btn-primary">
            {{ __('Log in') }}
        </x-jet-button>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif
        </div>
    </form>
</body>