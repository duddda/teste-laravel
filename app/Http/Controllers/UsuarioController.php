<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Repositories\UserRepository;


class UsuarioController extends Controller
{
    public function index()
    {
        return view('usuario');
    }
    public function buscar(Request $request)
    {
        $usuario = $request->input('usuario');
        $response = Http::get("https://api.github.com/users/$usuario");
        $repos = Http::get("https://api.github.com/users/$usuario/repos");
        return view('usuarioBuscado', [
            'usuario' => json_decode($response->body(), true),
            'repos' => json_decode($repos->body(), true)
        ]);
    }
}
