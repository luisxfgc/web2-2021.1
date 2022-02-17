<?php

namespace App\Http\Controllers;

use App\Models\FornecedorModel;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    //
    public function index(){
        $fornecedores = FornecedorModel::all();
        return view('fornecedores/index', ['fornecedores' => $fornecedores]);
    }

    public function create(){
        return view('fornecedores.create');
    }

    public function add(Request $request){
        $fornecedor = new FornecedorModel();
        $fornecedor = $fornecedor->create($request->all());
        return redirect('fornecedores/index');
    }

    public function edit($id){
        $fornecedor = FornecedorModel::FindOrFail($id);
        return view('fornecedores/create', ['fornecedor' => $fornecedor]);
    }

    public function update($id, Request $request){
        $fornecedor = FornecedorModel::findOrFail($id);
        $fornecedor->update($request->all());
        return redirect('fornecedores/index');
    }

    public function delete($id){
        $fornecedor = FornecedorModel::findOrFail($id);
        $fornecedor->delete();
        return redirect('fornecedores/index');
    }
}
