<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosControler extends Controller
{

    public function criar(Request $request){
        $produto = new Produto;
        $produto->name = $request->name;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;

        $produto->save();
        return redirect("");
    }

    public function listar(){
        $produto = Produto::all();
        return view("prod",["prod"=>$produto]);
    }


    public function formProduto(){
        return view("listar_produtos");        
    }

}
