<?php

namespace App\Http\Controllers;

use App\Models\Postagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostagemController extends Controller
{
    public function index()
    {
        // Carrega as postagens trazendo os dados do usuário conectado
        $postagens = Postagem::with('user')->latest()->get();

        return view('postagens.index', compact('postagens'));
    }

    public function create()
    {
        return view('postagens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'comentario' => 'required',
            'imagem' => 'nullable|image'
        ]);

        $imagem = null;

        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem')->store('postagens', 'public');
        }

        // Salva a postagem atrelando ao ID do usuário autenticado no login
        Postagem::create([
            'titulo' => $request->titulo,
            'comentario' => $request->comentario,
            'imagem' => $imagem,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('postagens.index');
    }

    public function show(Postagem $postagem)
    {
        return view('postagens.show', compact('postagem'));
    }

    public function edit(Postagem $postagem)
    {
        return view('postagens.edit', compact('postagem'));
    }

    public function update(Request $request, Postagem $postagem)
    {
        $imagem = $postagem->imagem;

        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem')->store('postagens', 'public');
        }

        $postagem->update([
            'titulo' => $request->titulo,
            'comentario' => $request->comentario,
            'imagem' => $imagem
        ]);

        return redirect()->route('postagens.index');
    }

    public function destroy(Postagem $postagem)
    {
        $postagem->delete();

        return redirect()->route('postagens.index');
    }
}