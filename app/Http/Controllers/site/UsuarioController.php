<?php

namespace App\Http\Controllers\site;

use App\Models\usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEditUsuario;

class UsuarioController extends Controller
{
    //
    public function index(usuario $consultando){
        // utilizando paginação
        $dados = $consultando->all();
        $dados = $consultando->paginate();
        return view('site/indexContatos', compact('dados'));
    }

    public function createForm(){
        return view('site/contatos/createContatos');
    }
    // public function create(usuario $usuario, Request $requests){
    public function create(usuario $usuario, CreateEditUsuario $requests){
        $request = $requests->all();
        $usuario->create($request);
        return redirect()->route('contatos.index');
    }
    public function show(string | int $id){
        if(!$showRequests = usuario::find($id)){
            return back();
        };
        return view('site/contatos/showContatos', compact('showRequests'));
    }
    // edit (formulario) vai para o update
    public function edit(string $id){
        if(!$editRequests = usuario::find($id)){
            return back();
        };
        return view('site/contatos/editContatos', compact('editRequests'));
    }
    // apos criado regras de request
    // public function update(string | int $id, Request $request){
    public function update(string | int $id, CreateEditUsuario $request){
        if(!$dados = usuario::find($id)){
            return back();
        };
        $dados->update($request->only(
            ['contato'],
        ));
        return redirect()->route('contatos.index');
    }
    // deleteForm(formulario) vai para delete
    public function deleteForm(string $id){
        if(!$deleteRequests = usuario::find($id)){
            return back();
        };
        return view('site/contatos/deleteContatos', compact('deleteRequests'));
    }
    public function delete(string | int $id){
        if(!$produto = usuario::find($id)->delete()){
            return back();
        };
        return redirect()->route('contatos.index');
    }
}
