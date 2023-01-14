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

        .container-fluid {
            align-items: center;
            text-align: center;
        }

        ul {
            margin: 0 auto !important;
        }

        a {
            text-decoration: none !important;
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
    </style>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Seja Bem-Vindo(a) <br>
                {{ Auth::user()->name }}
            </h2>
        </x-slot>

        <div class="container-fluid">
            <div class="mb-3 py-12 row">
                <a class="pagina-desativada col" href="{{ route('lendo') }}">
                    <span>Lendo</span>
                </a>
                <a class="pagina-desativada col" href="{{ route('lido') }}">
                    <span >Lidos</span>
                </a>
                <a class="pagina-desativada col" href="{{ route('lerei') }}">
                    <span>Quero Ler</span>
                </a>
            </div>
        </div>
    </x-app-layout>
</body>

</html>