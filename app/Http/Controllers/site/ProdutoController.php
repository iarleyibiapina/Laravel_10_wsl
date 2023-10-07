<?php

namespace app\Http\Controllers\site;

use Illuminate\Http\Request;
// importando para consultas
use App\Models\produto;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    // consultando pelo model, envia os dados para a variavel 
    // ('model' 'armazena')
    public function index(produto $todosDadosEnviado){
        // depois joga para outra variavel dentro da classe, aqui o metodo esta pegando todos os elementos
        $dados = $todosDadosEnviado->all();
        // dd($dados);
        // envia os dados no nome de 'dados'
        return view('site/home', compact('dados'));
    }

    public function create(){
        // pega a url, que foi passada o mesmo controller, mas a classe create, retorna o caminho da view.
        return view('site/formUser/formProduto');
    }

    // pegando a classe 'store', go verbo 'post', pegando dados do 'Request' enviando para variavel '$todosDadosEnviados' e acessando eles depois.
    // Request - verbo especial que 'pega' os pedidos, envios de formularios
    public function store(Request $todosDadosEnviado){
        // outra forma de passar o model, 
        // public function store(Request $todosDadosEnviado, produto $produto)
        
        // CRUD, CREATE. 

        // pega os todos os dados do requeste

        $data = $todosDadosEnviado->all();

        // chama o model(coluna) e 'create' os dados. por isso é uma boa pratica colocar nos inputs name o nome das colunas, para melhor consulta.
        produto::create($data);
        // quando passado no parametro
        // $produto->create($data);

        // dados enviados, agora sera redirecionado para a home
        return redirect()->route('user.index');
    }
}
