<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <title>Document</title>

    <style>
        a {
            text-decoration: none !important;
        }

        .pagina {
            width: 100px;
            height: 40px;
            color: blue;
            border-bottom: 2px solid blue;
            display: inline-block;
            text-align: center;
        }

        .pagina-desativada {
            width: 100px;
            height: 40px;
            border-bottom: 2px solid #acacac;
            text-align: center;
            display: inline-block;
        }

        .div1 {
            max-width: 100%;
            height: 150px;
            margin: 10px;
            padding: 10px;
            background-color: #ffff;
            list-style: none;
            display: flex;
        }

        .livros {
            margin: 0 auto;
            max-width: 600px;
        }

        .img {
            height: 130px;
        }

        .div2 {
            margin: 0 20px;
        }

        .titulo {
            font-weight: 800;
            font-size: 20px;
        }
    </style>

</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dados do livro:') }} <br> {{ $show->titulo }}
            </h2>
        </x-slot>

        <div class="livros card p-4 mt-12">
            @foreach ($show_1 as $show)
            <ul class="d-flex">
                <li class="col text-justify me-3">
                    <span>
                        Código: {{ $show->id }} <br>
                    </span>
                    <span>
                        Livro: {{ $show->titulo }} <br>
                    </span>
                    <span>
                        Autor: {{ $show->autor }} <br>
                    </span>
                    <span>
                        Sinopse: <br> {{ $show->sinopse }} <br> <br>
                    </span>
                    <span>
                        Páginas: {{ $show->paginas }} <br>
                    </span>
                    <span>
                        Editora: {{ $show->editora }} <br>
                    </span>
                    <span>
                        ISBN: {{ $show->isbn }}
                    </span>
                </li>
                <li>
                    <img style="max-width: 150px;" src="/storage/images/{{ $show->image }}" alt="">
                </li>
            </ul>
            <ul>
            </ul>
            @endforeach
        </div>

    </x-app-layout>
</body>

</html>