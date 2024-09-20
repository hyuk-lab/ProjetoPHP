<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    public function criar(Request $request) {
        $venda = new Venda();
        $venda->name = $request->name;
        $venda->matricula = $request->matricula;
        $venda->comissao = $request->comissao;

        $venda->save();
        return redirect('/listar_vendedor');
    }

    public function formVendedor (){

        return view("cadastro_vendedor");
        
    }

    public function listar() {
        $vendedores = Venda::all();

        return view("vendedores", ["vendedores"=>$vendedores]);

    }
}
