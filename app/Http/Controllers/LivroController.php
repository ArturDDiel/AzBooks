<?php

namespace App\Http\Controllers;

use App\Models\Livros;
use Illuminate\Database\Console\DumpCommand;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class LivroController extends Controller
{
    public function cadastrar()
    {
        $livro = Livros::all();

        return view('cadastros-listas\cadastro', [ 'livro' => $livro ]);
    }

    public function salvarLendo(Request $request)
    {
        
        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $imageName);

        Livros::create([
            'image' => $imageName,
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'sinopse' => $request->sinopse,
            'paginas' => $request->paginas,
            'paginas_lidas' => $request->paginas_lidas,
            'editora' => $request->editora,
            'isbn' => $request->isbn,
            'status' => $request->status,
        ]);

        return redirect('/lendo');
    }

    public function lendo()
    {
        $lendo = Livros::where('status', '1')->get();
        $lendos = $lendo->count();

        return view('status\lendo', ['lendo' => $lendo, 'lendos' => $lendos]);
    }

    public function lerei()
    {
        $lerei = Livros::where('status', '0')->get();
        $lereis = $lerei->count();

        return view('status\lerei', ['lerei' => $lerei, 'lereis' => $lereis]);
    }

    public function lido()
    {
        $lido = Livros::where('status', '2')->get();
        $lidos = $lido->count();

        return view('status\lido', ['lido' => $lido, 'lidos' => $lidos]);
    }

    public function edit($id)
    {
        $lereis = Livros::where('id', $id);
        $livro = Livros::findOrFail($id);

        return view('cadastros-listas\edit', ['livro' => $livro, 'status' => $lereis]);
    }

    public function update(Request $request, $id)
    {
        $livro = Livros::findOrFail($id);

        $livro->update([
            'status'=> $request->status,
        ]);

        return view('/dashboard');
    }

    public function show(Request $request, $id)
    {        
        $show_1 = Livros::where('id', $id)->get();
        $show = Livros::findOrFail($id);

        return view('show', ['show' => $show, 'show_1' => $show_1]);
    }
}
