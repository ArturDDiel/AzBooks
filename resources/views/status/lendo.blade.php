<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Lendo') }}
                </h2>
        </x-slot>

        <div class="py-12 text-center container">
            <ul class="pagination pagination-lg row">
                <span class="pagina col">Lendo</span>
                <a class="pagina-desativada col" href="{{ route('lido') }}"><span>Lidos</span></a>
                <a class="pagina-desativada col" href="{{ route('lerei') }}"><span>Quero Ler</span></a>
            </ul>
        </div>

        <div class="livros">

            @if(( $lendos ) === 0)
            Você ainda não adicionou livros <br>
            @elseif (( $lendos ) === 1)
            Lendo ({{ $lendos }} livro) <br>
            @else
            Lendo ({{ $lendos }} livros)<br>
            @endif

            @foreach ( $lendo as $lendo )
            <ul class="div1">
                <li>
                    <img class="img" src="/storage/images/{{ $lendo->image }}" alt="Capa do Livro">
                </li>
                <ul class="div2">
                    <li class="titulo d-flex">
                        {{ $lendo->titulo }}
                        <a href="/editar-livro/{{ $lendo->id}}">
                            <svg style="margin: 5px 0 0 5px" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                        </a>
                    </li>
                    <li>{{ $lendo->autor }}</li>

                    @if ($lendo->paginas_lidas === null)
                    <li>0/{{ $lendo->paginas }}</li>
                    @else
                    <li>{{ $lendo->paginas_lidas }}/{{ $lendo->paginas }}</li>
                    @endif

                    @php
                    $porcentagem = ($lendo->paginas_lidas / $lendo->paginas) * 100;
                    @endphp
                    <div class="progress" style="width: 250px;">
                        <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: {{ $porcentagem }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ $porcentagem }}%</div>
                    </div>
                    <span><a href="/show/{{ $lendo->id}}">Mais Informações</a></span>
                </ul>
            </ul>

            @endforeach
        </div>
    </x-app-layout>
</body>

</html>