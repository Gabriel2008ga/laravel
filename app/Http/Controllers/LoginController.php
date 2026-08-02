<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Exibe o formulário de login
    public function showForm()
    {
        return view('login');
    }

    // Processa a entrada do usuário
    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        // Procura o usuário pelo e-mail ou cria um novo se não existir
        $user = User::firstOrCreate(
            ['email' => $request->email],
            ['name' => $request->name, 'password' => bcrypt('123456')] // Senha genérica
        );

        // Conecta o usuário no sistema
        Auth::login($user);

        return redirect()->route('postagens.index');
    }

    // Desconecta o usuário
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}