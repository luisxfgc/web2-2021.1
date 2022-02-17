<?php

namespace App\Http\Controllers;

use App\Models\FornecedorModel;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    //
    public function show(){
        $fornecedor = FornecedorModel::all();
        $id = FornecedorModel::all();
        $nome = FornecedorModel::all();
        $cnpj = FornecedorModel::all();
        $descricao = FornecedorModel::all();
        return view('fornecedor.showfornecedor', [
            'fornecedor'=>$fornecedor,
            'fornecedor.id'=>$id,
            'fornecedor.endereco'=>$nome,
            'fornecedor.telefone'=>$cnpj,
            'fornecedor.telefone'=>$descricao,

        ]);
    }
    public function create(){
        return view('fornecedor.createfornecedor');
    }

    public function store(Request $request){
        $fornecedor = new FornecedorModel();
        $fornecedor->id = $request->id;
        $fornecedor->nome = $request->nome;
        $fornecedor->cnpj = $request->cnpj;
        $fornecedor->descricao = $request->descricao;
        $fornecedor->save();
        return redirect('fornecedorshow');
        
    }
}
