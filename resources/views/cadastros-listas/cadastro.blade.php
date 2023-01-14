<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>

    <style>
        .form-control {
            max-width: 400px;
            margin: 10px auto;
            border-radius: 5px !important;
        }

        textarea {
            min-height: 42px !important;
        }

        .number {
            width: 195px;
        }

        .paginas {
            display: flex;
            width: 400px;
            margin: 0 auto;
        }

        
    </style>

</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Cadastro de livros') }}
            </h2>
        </x-slot>

        <div class="py-12 text-center">
            <form action="/cadastrar-livro" method="POST" enctype="multipart/form-data">
                @csrf
                <input class="form-control" type="file" name="image">
                <input class="form-control" type="text" placeholder="Título" name="titulo">
                <input class="form-control" type="text" placeholder="Autor" name="autor">
                <textarea class="form-control" type="text" placeholder="Sinopse" name="sinopse"></textarea>
                <div class="paginas">
                    <input class="form-control number" type="number" placeholder="Páginas" name="paginas">
                    <input class="form-control number" type="number" placeholder="Páginas Lidas" name="paginas_lidas">
                </div>
                <input class="form-control" type="text" placeholder="Editora" name="editora">
                <input class="form-control" type="number" placeholder="ISBN" name="isbn">

                <select class="form-control" name="status" id="status">
                    <option selected disabled>Status</option>
                    <option {{!is_null(request()->input('lera')) && request()->input('lera') == 0 ? 'selected' : ''}} value="0">Quero Ler</option>
                    <option {{request()->input('lendo') == 1 ? 'selected' : ''}} value="1">Lendo</option>
                    <option {{request()->input('lido') == 2 ? 'selected' : ''}} value="2">Lido</option>
                </select>

                <button class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </x-app-layout>
</body>

</html>