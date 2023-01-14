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
        
        .descricao{
            max-width: 400px;
            margin: 50px auto;
        }

        .form-control {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>

</head>

<body class="container-fluid">
    
    @if (session('status'))
    <div class="mb-3">
        {{ session('status') }}
    </div>
    @endif
    
    <x-jet-validation-errors class="mb-3" />
    
    <img style="max-width: 200px; margin-top: 5%;" src="https://live.staticflickr.com/65535/52323526060_dcaeb33cac_z.jpg" alt="">
    
    <div class="descricao">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <form class="container" method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-3">
            <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <x-jet-button class="btn btn-primary">
            {{ __('Email Password Reset Link') }}
        </x-jet-button>
    </form>
</body>