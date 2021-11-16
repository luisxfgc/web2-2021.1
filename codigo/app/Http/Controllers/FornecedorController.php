<?php

namespace App\Http\Controllers;

use App\Models\FornecedorModel;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    //
    public function show(){
        $fornecedor =FornecedorModel::all();
        $id = FornecedorModel::all();
        $nome = FornecedorModel::all();
        $cnpj = FornecedorModel::all();
        $descricao = FornecedorModel::all();
        return view('fornecedor.mostrarFornecedor', [
            'fornecedor'=>$fornecedor,
            'fornecedor.id'=>$id,
            'fornecedor.endereco'=>$nome,
            'fornecedor.telefone'=>$cnpj,
            'fornecedor.telefone'=>$descricao,

        ]);
    }
    public function create(){
        $fornecedor = FornecedorModel::all();
        return view('fornecedor.create');
    }
    public function store(){
        return view('fornecedor.store');
    }
}
