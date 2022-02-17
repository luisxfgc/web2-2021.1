<?php

namespace App\Http\Controllers;

use App\Models\FuncionarioModel;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    //
    public function index(){
        $funcionarios = FuncionarioModel::all();
        return view('funcionarios/index', ['funcionarios' => $funcionarios]);
    }

    public function create(){
        return view('funcionarios.create');
    }

    public function add(Request $request){
        $funcionario = new FuncionarioModel();
        $funcionario = $funcionario->create($request->all());
        return redirect('funcionarios/index');
    }

    public function edit($id){
        $funcionario = FuncionarioModel::FindOrFail($id);
        return view('funcionarios/create', ['funcionario' => $funcionario]);
    }

    public function update($id, Request $request){
        $funcionario = FuncionarioModel::findOrFail($id);
        $funcionario->update($request->all());
        return redirect('funcionarios/index');
    }

    public function delete($id){
        $funcionario = FuncionarioModel::findOrFail($id);
        $funcionario->delete();
        return redirect('funcionarios/index');
    }
}
