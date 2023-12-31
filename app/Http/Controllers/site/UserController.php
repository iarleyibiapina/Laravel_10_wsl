<?php

namespace app\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\produto;
use Illuminate\Http\Request;

class UserController extends Controller{
    public function user(produto $dados){
        $dado = $dados->all();
        dd($dado);

        return view('user.index');
    }

    public function create(){
        // pega a url, que foi passada o mesmo controller, mas a classe create, retorna o caminho da view.
        return view('site/formUser/user');
    }

    // pegando a classe 'store', go verbo 'post', pegando dados do 'Requeste' enviando para variavel '$todosDadosEnviados' e acessando eles depois.
    public function store(Request $todosDadosEnviado){

        $dados = $todosDadosEnviado->all();
        // dd($dados);
        // compact pega indices e dados da variavel, enviando dados para a view.
        return view ('/site/user', compact('dados'));
    }
}