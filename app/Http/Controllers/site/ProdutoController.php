<?php

namespace app\Http\Controllers\site;

use Illuminate\Http\Request;
// importando para consultas
use App\Models\produto;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEditProduto;

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

    // pegando a classe 'store', go verbo 'post', pegando dados do 'Request' enviando para variavel '$todosDadosEnviados' e acessando eles depois.
    // Request - verbo especial que 'pega' os pedidos, envios de formularios

    // atualização aula 16 (Request para CreateEditProduto)
    public function create(CreateEditProduto $todosDadosEnviado, produto $produto){
        // outra forma de passar o model, 
        // public function store(Request $todosDadosEnviado, produto $produto)
        
        // CRUD, CREATE. 

        // pega os todos os dados do requeste

        // $data = $todosDadosEnviado->all();
        // depois de alterado a validação
        $data = $todosDadosEnviado->validated();
        $data['status'] = 'ativo';

        // chama o model(coluna) e 'create' os dados. por isso é uma boa pratica colocar nos inputs name o nome das colunas, para melhor consulta.
        $produto->create($data);
        // quando passado no parametro
        // $produto->create($data);

        // dados enviados, agora sera redirecionado para a home
        return redirect()->route('user.index');
    }

    // envia como parametro para ser armazenado em $id, dados do tipo string ou int
    // aqui o model é passado dentro da função com metodo 'model::'
    public function show(string | int $id) {
        // exibe os resultados conforme o id do usuario

        // dentro do controller, é usado o model com metodo find()
        // ele ja é especifico para achar o parametro, nesse caso o id certo.
        // armazena os dados em uma variavel para melhor trabalho
        // $dados = 'model'->find($id);
        // para fazer uma pequena validação, caso id não exista
        if(!$dados = produto::find($id)){
            // envia o usuario de volta, retorna a ação 
            return back();
        }

        return view('site/userShow', compact('dados'));
    }

// aqui nos parametros o model é passado de forma dinamica
    public function edit(string | int $id, produto $dados){
        // mesma logica, porem desta vez irei procurar pela coluna e por id correto.
        // procura na coluna id, pelo id passado e retorna a primeira consulta.
        if(!$dados = $dados->where('id', $id)->first()){
            return back();
        }
        return view('site/userEdit', compact('dados'));
    }
// atualização aula de request, alterado 'model' "produtos" para 'request' "CreateEditProduto"
    public function update(string | int $id, CreateEditProduto $request, produto $dados){
        if(!$dados = $dados->find($id)){
            return back();
        }
        // $dados->update($request->only([
        //     'assunto', 'descricao'
        // ]));
        $dados->update($request->validated());
        return redirect()->route('user.index');
    }

    public function delete(string | int $id){
        if(!$dados = produto::find($id)){
            return back();
        }

        $dados->delete();

        redirect()->route('user.index');
    }
}
