<?php

namespace App\Http\Controllers\site;

use App\Models\Contatos;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateContato;
use App\Http\Requests\UpdateContato;

class ContatoController extends Controller
{
    //
    public function index(Contatos $consultando)
    {
        // utilizando paginação
        $dados = $consultando->all();
        $dados = $consultando->paginate();
        return view('site/contatos/indexContatos', compact('dados'));
    }

    public function createForm()
    {
        return view('site/contatos/createContatos');
    }
    // public function create(usuario $contato, Request $requests){
    public function create(Contatos $contato, CreateContato $requests)
    {
        $request = $requests->all();
        $contato->create($request);
        return redirect()->route('contatos.index')->with('message', 'Contato criado com sucesso');
    }
    public function show(string | int $id)
    {
        if (!$showRequests = Contatos::find($id)) {
            return back();
        };
        return view('site/contatos/showContatos', compact('showRequests'));
    }
    // edit (formulario) vai para o update
    public function edit(string $id)
    {
        if (!$editRequests = Contatos::find($id)) {
            return back();
        };
        return view('site/contatos/editContatos', compact('editRequests'));
    }
    // apos criado regras de request alterar para CreateContato e UpdateContato
    public function update(string | int $id, UpdateContato $request)
    {
        if (!$dados = Contatos::find($id)) {
            return back();
        };
        $dados->update($request->only(
            ['contato'],
        ));
        return redirect()->route('contatos.index')->with('message', 'Contato atualizado com sucesso');
    }
    public function deleteForm(string $id)
    {
        if (!$deleteRequests = Contatos::find($id)) {
            return back();
        };
        return view('site/contatos/deleteContatos', compact('deleteRequests'));
    }
    public function delete(string | int $id)
    {
        if (!$produto = Contatos::find($id)->delete()) {
            return back();
        };
        return redirect()->route('contatos.index')->with('message', 'Contato deletado com sucesso');
    }
}
