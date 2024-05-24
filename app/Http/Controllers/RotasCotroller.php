<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RotasCotroller extends Controller
{
    public function index() {
        return view('contato');
    }

    public function processa(Request $req) {
        // echo $req->input('nome');
        $nome = $req->nome;
        $email = $req->email;
        return view('processa', compact("nome", "email"));
        // return view('processa', ['nome' => $nome]);
    }
}
