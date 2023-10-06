<?php

namespace app\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    //
    public function index(){
        // $dado = $dados->all();
        // dd($dado);

        return view('site/home');
    }

    public function create(){
        // pega a url, que foi passada o mesmo controller, mas a classe create, retorna o caminho da view.
        return view('site/formUser/formProduto');
    }

    // pegando a classe 'store', go verbo 'post', pegando dados do 'Requeste' enviando para variavel '$todosDadosEnviados' e acessando eles depois.
    public function store(Request $todosDadosEnviado){

        // $dados = $todosDadosEnviado->all();
        // dd($dados);
        // compact pega indices e dados da variavel, enviando dados para a view.
        return view ('/site/user', compact('dados'));
    }
}
