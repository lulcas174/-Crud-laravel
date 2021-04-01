<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller
{
    public function create(){
        return view('produtos.create');
    }
    public function store(Request $request){

        Produto::create([
            'nome'=> $request->nome,
            'custo'=> $request->custo,
            'preco'=> $request ->preco,
            'quantidade'=> $request->quantidade,
        ]);

        return "Produto Cadastrado com sucesso";
    }
    public function show($id){
        $produto = Produto::findOrFail($id);
        return view('produtos.show',['produto'=> $produto]);
    }
    public function edit($id){
        $produto = Produto::findOrFail($id); //find or fail é um função reservada da model, para caso não ache o id, de uma mensagem de erro
        return view('produtos.edit',['produto'=> $produto]);
    }
    public function update(Request $request , $id){
        $produto = Produto::findOrFail($id);
        $produto->update([
            'nome'=> $request->nome,
            'custo'=> $request->custo,
            'preco'=> $request ->preco,
            'quantidade'=> $request->quantidade,
        ]);
        return "Produto 100% atualizado, é ruim de aturar";
    }
    public function delete($id){
        $produto = Produto::findOrFail($id);
        return view('produtos.delete',['produto'=>$produto]);
    }
    public function destroy($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return "Produto excluido com sucesso";
    }
}
